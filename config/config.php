<?php
require_once __DIR__ . '/env-loader.php';
loadEnv(__DIR__ . '/../.env');

return [
    'openai_api_key' => getenv('OPENAI_API_KEY'),
    'huggingface_api_key' => getenv('HUGGINGFACE_API_KEY'),
    'feedback_email' => getenv('FEEDBACK_EMAIL'),
    'company_name' => getenv('COMPANY_NAME'),
];
