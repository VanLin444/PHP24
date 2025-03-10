
<?php

// Есть два способа определения констант
// Первый - с помощью функции define()

define("BIDJU" , 9);
echo "Количество Биджу : " . BIDJU;

echo '<br>';

// Второй способ - с помощью ключевого слова const

const BESTGAME = "Dishonored";
echo "Лучшая игра - " . BESTGAME;

echo '<br>';

// Константы могу иметь только скалярные значения  (bool, int, float и string) 
// и константы array, содержащие только скалярные выражения

const UZUMAKI_FAMILY = ["Naruto","Karin", "Kushina", "Nagato"];
echo "UZUMAKI : <br>";
foreach (UZUMAKI_FAMILY as $name){
    echo $name . '<br>';
}

// Магические константы. Их всего 9.
/*
__LINE__	Текущий номер строки в файле.
__FILE__	Полный путь и имя текущего файла с развёрнутыми симлинками. 
Если используется внутри подключаемого файла, то возвращается имя данного файла.
__DIR__	Директория файла. Если используется внутри подключаемого файла, то возвращается директория этого файла. 
Это эквивалентно вызову dirname(__FILE__). Возвращаемое имя директории не оканчивается на слеш, за исключением корневой директории.
__FUNCTION__	Имя функции или {closure}-замыкания в случае анонимной функции.
__CLASS__	Имя класса. Это имя содержит название пространства имён, в котором класс был объявлен (например, Foo\Bar). 
При использовании в методах трейтов __CLASS__ является именем класса, в котором эти методы используется.
__TRAIT__	Имя трейта. Это имя содержит название пространства имён, в котором трейт был объявлен (например, Foo\Bar).
__METHOD__	Имя метода класса.
__NAMESPACE__	Имя текущего пространства имён.
ClassName::class	Полное имя класса.

TFF(фонарный столб T) LMN🍋 CD💿
*/

echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';

function kageBunshin(){
    echo __FUNCTION__;
}
kageBunshin();

echo '<br>';

class Ninja {
    function className(){
        echo __CLASS__;
    }
}
$Kakashi = new Ninja;
$Kakashi ->className();

echo '<br>';

// Оператор instanceof - Определяет принадлежность объекта к классу
echo $Kakashi instanceof Ninja;

echo '<br>';

// Для определения типа переменной исп-ся функция gettype
echo gettype($Kakashi);

echo '<br>';

// Для проверки того ли типа переменная исп-ся функции начинающиеся с is_ и дальше int, float, string, bool и т.д. (is_int, is_array, is_object и т.д)
echo is_string(BESTGAME);
?>