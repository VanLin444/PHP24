<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Variables</title>
</head>
<body>

<?php

// Переменные 
// Название переменной должно начинаться с буквы или нижнего подчёркивания a-z , A-Z, _
// $this - это специальная переменная, которой нельзя ничего присваивать


// Присвоение переменной значения
$team7 = 3;

// Присвоение переменной по ссылке &
$team8 = &$team7;
// Мы увеличили значение переменной team8 , при этом изменив и значение team7
$team8 += 1;
echo $team7;

echo '<br>';

// Предопределённые переменные содержат всё от внешних данных до переменных среды окружения,
// от текста сообщений об ошибках до последних полученных заголовках
/* 
Суперглобальные переменные — Встроенные переменные, которые всегда доступны во всех областях
$GLOBALS — Ссылки на все переменные глобальной области видимости
$_SERVER — Информация о сервере и среде исполнения
$_GET — Переменные HTTP GET
$_POST — Переменные HTTP POST
$_FILES — Переменные файлов, загруженных по HTTP
$_REQUEST — Переменные HTTP-запроса
$_SESSION — Переменные сессии
$_ENV — Переменные окружения
$_COOKIE — HTTP Cookies
$php_errormsg — Предыдущее сообщение об ошибке
$http_response_header — Заголовки ответов HTTP
$argc — Количество аргументов, переданных скрипту
$argv — Массив переданных скрипту аргументов
*/
echo $_SERVER["PHP_SELF"];
echo '<br>';

// Суперглобальные переменные - набор предопределённых массивов,
// содержащих переменные сервера (если они доступны), окружения и пользовательского ввода.
// Суперглобальные переменные доступны во всех областях видимости.
/*
$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV

SS GG PERFC👌
*/
// Я обращаюсь к глобальной переменной team7, а не к локальной с тем же именем
echo $GLOBALS['team7'];

echo '<br>';

// Все переменные внутри функции локальны для того чтобы использовать 
// глобальную переменную внутри функции нужно приписать global, то есть область видимости.
function test1(){
    global $team7;
    echo $team7;
}
test1();

// Статическая переменная существует только в локальной 
// области видимости функции, но не теряет своего значения, 
// когда выполнение программы выходит из этой области видимости.
function test(){
    static $a = 0;
    echo '<br>';
    echo $a;
    $a++;
}
// При каждом вызове функции статическая переменная будет увеличиваться на 1
test();
test();

echo '<br>';

// Переменные переменных
// Переменная переменной берет значение переменной и рассматривает его как имя переменной.
$name = "NARUTO";
$$name = "UZUMAKI";
echo $NARUTO;

// Переменные переменных с массивами
// Фигурные скобки в данном случае используются для явного указания порядка операций. (Сначала возьми элемент массива, а уже потом создай переменную с именем = элементу массива)
$teamSeven = ["Naruto","Saske","Sakura"];
${$teamSeven[0]} = " SANIN";
echo $Naruto;

echo '<br>';

// Уничтожение переменной
$void = null;
$void1;
$var1 = 23;
echo "Было: $var1 Стало: NULL<br>";
unset($var1);
echo $var1;
echo is_null($var1);

echo '<br>';

// Экранирование — это способ "обезвредить" специальные символы, чтобы они воспринимались как обычный текст, а не как часть кода.
echo "Он сказал \"Привет\" <br>"; // Он сказал "Привет"
echo 'It\'s my book <br>';        // It's my book
?>

</body>
</html>