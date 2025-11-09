<?php
require 'json.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>

<body>
    <!-- Возвращает JSON-представление данных -->
    <H1>Преобразование массива в JSON формат</H1>
    <pre>
        <p><?php print_r($json) ?></p>
    </pre>

    <!-- Декодирует строку JSON -->
    <H1>Преобразование из JSON формата в массив</H1>
    <pre>
        <p><?php print_r(json_decode($json)) ?></p>
    </pre>

    <!-- Возвращает код последней ошибки -->
    <pre>
        <H1>Код последней ошибки</H1>
        <p><?php print_r(json_last_error()) ?></p>
    </pre>

    <!-- Возвращает строку с сообщением об ошибке последнего вызова функции json_validate(), json_encode() или json_decode() -->
    <pre>
        <H1>Сообщением об ошибке</H1>
        <p><?php print_r(json_last_error()) ?></p>
    </pre>

    <!-- Проверяет, содержит ли строка допустимые данные в JSON-формате -->
    <pre>
        <H1>Допустимые ли данные в JSON-формате?</H1>
        <p><?php print_r(json_validate($json)) ?></p>
    </pre>
</body>

</html>