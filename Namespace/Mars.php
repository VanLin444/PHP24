<?php
include "Solar.php";
class Planet {
    public function getName(){
        echo "Mars red planet his number in solar system - 4 <br>";
    }
}

$planet = new SolarSystem\Planet(); // Создали объект класса из другого пространства имён
$planet -> setInfo("Earth", 3); // Вызвали его методы
$planet -> getInfo();

$mars = new Planet; // Создали объект класса текущего пространства имён
$mars -> getName(); // Вызвали его метод
?>