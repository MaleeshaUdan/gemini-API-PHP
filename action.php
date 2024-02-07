<?php

require 'generateContent.php';

$apiKey="API_KEY";
$prompt="---Give Your Prompt here---";

$generatedText = generateAIContent($apiKey, $prompt);
echo $generatedText;
