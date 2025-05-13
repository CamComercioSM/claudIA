<?php
require_once 'IaServiceInterface.php';

class OpenAiService implements IaServiceInterface {
    private $api_key;

    public function __construct($api_key) {
        $this->api_key = $api_key;
    }

    public function processPrompt(string $prompt): string {
        $data = [
            'model' => 'gpt-3.5-turbo',
            'messages' => [['role' => 'user', 'content' => $prompt]],
            'temperature' => 0.7
        ];

        $response = $this->makeRequest('https://api.openai.com/v1/chat/completions', $data);
        return $response['choices'][0]['message']['content'] ?? $response['error']['message'];
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
