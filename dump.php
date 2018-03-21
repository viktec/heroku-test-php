<?php
$content = file_get_contents("php://input");
echo "Content: " . $content . PHP_EOL . PHP_EOL;

$token = getenv('BOTTOKEN');
echo "Token: " . $token . PHP_EOL;
