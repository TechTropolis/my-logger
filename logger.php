<?php
$data = json_decode(file_get_contents('php://input'), true);

$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $data['userAgent'] ?? 'unknown';
$language = $data['language'] ?? 'unknown';
$platform = $data['platform'] ?? 'unknown';

$log = "IP: $ip | User Agent: $userAgent | Language: $language | Platform: $platform | Date: " . date('Y-m-d H:i:s') . "\n";

file_put_contents("logs.txt", $log, FILE_APPEND);

http_response_code(200);
?>
