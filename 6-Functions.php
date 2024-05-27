<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Functions</title>
</head>
<body>

<?php
// Простая функция
function getName($name, $secondName = "Antipov"){
    echo "Привет $name !";
}
getName("Ivan");

echo "<br>";

//Передача аргументов по ссылке
$nickname = "Moto";
function getNickname(&$nickname){
    $nickname .= "Toto";
}
getNickname($nickname);
echo $nickname;

echo "<br>";

// Переменное количество аргументов
function getFIO(...$FIO){
    $str ="";
    foreach ($FIO as $value){
        $str .= $value . " ";
    }
    echo $str;
}
getFIO("Antipov", "Ivan", "Vyacheslavovich");

echo "<br>";

$funcName = "getName";
$funcName("VAN");

echo "<br>";

// Встроенные функции . По типу is_..., var_dump и т.д. Встроенные, то есть функции доступные
// без дополнительных модулей.
echo is_string($nickname);
echo is_int($nickname); // Не показывает 0 т.к FALSE
var_dump($nickname);

echo "<br>";

// Анонимные функции
// У Анонимной функции , чтобы использовать переменные из родительской области видимости нужно 
// наследовать их с помощью use. Иначе эти переменные будут не определены (Undefinde variable)
// Изменённое в родительской области видимости значение не отразится на значение внутри функции.
// Только если передать в use переменную по ссылке. Например &$name и дальше изменить значение перменной
// $name на "Naruto" и вызвать переменную $shinobiInfo() ещё раз , то теперь вместо Джираи выведется
// Наруто т.к в функции мы ссылаемся на перменную $name , а она уже изменилась. 
$name = "Djiraya";
$rank = "Sanin";
$village = "Konohagakure";
$shinobiInfo = function () use ($name,$rank,$village) { echo 'Name: '.$name.' '.'Rank: '.$rank.' '.'Village: '.$village;};
$shinobiInfo();
echo "<br>";
var_dump($shinobiInfo); // Из этого мы видим , что переменная $shinobiInfo является объектом класса Closure (замыкание)

echo "<br>";

// Стрелочные функции  fn() =>
// Стрелочные функции поддерживают те же возможности, что и анонимные функции, 
// за исключением того, что использование переменных из родительской области всегда выполняется автоматически.
// Что и видно из примера ниже, до этого нам нужно было прописывать переменные в use а теперь они
// используются автоматически.
// Когда переменная, используемая в выражении, определена в родительской области, она будет неявно захвачена по значению.
// Привязка по значению означает, что невозможно изменить какие-либо значения из внешней области. 
// Вместо этого можно использовать анонимные функции для привязок по ссылкам.
$strFunc = fn() => 'Name: '.$name.' '.'Rank: '.$rank.' '.'Village: '.$village;
echo $strFunc();

$result = TRUE;
$skill = "Izanami";
function Izanagi(){
    global $result;
    global $skill;
    while($result){
        if ($skill != "Izanami"){
            echo "Бесконечная петля";
        } else {
            echo  "Петля разорвана";
            $result = FALSE;
        }
    }
}

Izanagi();
?>

</body>
</html>