<?php
// Автоматическая загрузка. Подгружает недостающие файлы с классами, если они есть.
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new Ninja1("Naruto");
$obj->getName();
?>