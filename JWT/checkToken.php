<?php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function verifyToken(string $jwt, $secretKey)
{
    try {
        return JWT::decode($jwt, new Key($secretKey, 'HS256'));
    } catch (Exception $e) {
        return null;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $decoded = verifyToken($_POST['token'], $_POST['key']);

    if ($decoded) {
        echo "<h2>✅ Токен действителен!</h2>";
    } else {
        echo "<h2 style='color:red;'>❌ Неверный или просроченный токен</h2>";
    }
}