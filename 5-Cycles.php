<?php
/*
    Циклы в PHP — это конструкции, которые позволяют повторять выполнение блока кода несколько раз. 
    Они используются для обработки массивов, выполнения задач определённое количество раз 
    или работы с данными, пока не будет выполнено условие.
*/
$countHokage = 1;
while ($countHokage != 7){
    echo "$countHokage - Hokage <br>";
    $countHokage++;
}

echo "<br>";

$countNinja = 1;
do {
    echo "$countNinja enemy ninja killed <br>";
    $countNinja++;
} while ($countNinja < 4);

echo "<br>";

for ($word = 0; $word < 5;$word++){
    echo "NARUTO KUN<br>";
}

echo "<br>";

// foreach - языковая конструкция для простого перебора массива. 
// Она работает только с массивами и объектами.
echo "Team Seven :<br>";
$teamSeven = ["Kakashi", "Naruto", "Sasuke", "Sakura"];
foreach($teamSeven as $ninja){
    echo "$ninja <br>";
}

echo "<br>";

echo "HOKAGE :<br>";
$hokage = ["First" => "Senju Hashirama", "Second" => "Tobirama Senju", "Third" => "Sarutobi Hiruzen", "Fourth" => "Namikaze Minato"];
foreach ($hokage as $number => $name){
    echo "$number hokage is $name <br>";
}

?>