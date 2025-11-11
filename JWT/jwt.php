<?php
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\KEY;

$secretKey = "abracadabra";
$tokenLifeTime = 60;

function generateToken(string $secretKey, int $tokenLifeTime): string
{
    $issuedAt = time();
    $expire = $issuedAt + $tokenLifeTime;

    $userData = [
        'sub' => 123,
        'name' => $_POST['username'],
        'iat' => $issuedAt,
        'exp' => $expire,
    ];

    // Генерация токена
    $jwt = JWT::encode($userData, $secretKey, 'HS256');

    return $jwt;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Для примера будем считать что каждый вошедший пользователь есть в системе
    if ($username === $username && $password === $password) {
        $_POST['jwt'] = generateToken($secretKey, $tokenLifeTime);
        echo <<<HTML
        <form action='checkToken.php' method='POST'>
            <h2>✅ Добро пожаловать, {$_POST['username']}!</h2>
            <p>Ваш JWT токен (срок 2 мин):</p>
            <textarea name='token' style='width:325px;height:100px;'>{$_POST['jwt']}</textarea>
            <textarea name='key' style='display:none'>{$secretKey}</textarea>
            <br>
            <button type='submit'>Check</button>
        </form>
        HTML;
    } else {
        echo "<p style='color:red;'>❌ Неверный логин или пароль</p>";
    }
}
