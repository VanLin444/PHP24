<?php
include_once "class_train.php";

// Сериализация в PHP - это процесс преобразования данных в строку, которая может быть сохранена или передана через сеть, а затем восстановлена обратно в исходное состояние. 
// Это удобно, когда нужно сохранить сложные данные, например массивы или объекты, и передать их на другую страницу или сервер.
$transport = new Train();
$transport -> setName("Thomas");
$send = serialize($transport); // Преобразовывваем данные в строку;
file_put_contents('data', $send); // Записываем данные в файл "data"
?>