<?php
//require_once '../config/config.php';
require_once '../src/Services/OpenAiService.php';
require_once '../src/Services/HuggingFaceService.php';

$prompt = $_POST['prompt'] ?? '';
$engine = $_POST['engine'] ?? 'openai';

$config = include('../config/config.php');

//print_r($config );

switch ($engine) {
    case 'huggingface':
        $service = new HuggingFaceService($config['huggingface_api_key']);
        break;
    default:
        $service = new OpenAiService($config['openai_api_key']);
}

$response = $service->processPrompt($prompt);

header('Content-Type: application/json');
echo json_encode(['response' => $response]);
