<?php
include_once "class_train.php";

$send = file_get_contents("data"); // Берём данные из файла "data"
$transport = unserialize($send); // Обратный процесс сериализации

$transport -> getName(); // Вызываем метод объекта
?>