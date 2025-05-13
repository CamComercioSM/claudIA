<?php
require_once 'IaServiceInterface.php';

class HuggingFaceService implements IaServiceInterface {
    private $api_key;
    private $model;

    public function __construct($api_key, $model = 'google/flan-t5-base') {
        $this->api_key = $api_key;
        $this->model = $model;
    }

    public function processPrompt(string $prompt): string {
        $response = $this->makeRequest("https://api-inference.huggingface.co/models/{$this->model}", [
            "inputs" => $prompt
        ]);
        return $response[0]['generated_text'] ?? 'Error';
    }

    private function makeRequest($url, $data) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->api_key
            ],
            CURLOPT_POSTFIELDS => json_encode($data)
        ]);

        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }
}
