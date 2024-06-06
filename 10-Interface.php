<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Inteface</title>
</head>
<body>

<?php
// Интерфейс - это способ определения методов, которые должны быть реализованы в классе.
// Интерфес содержит только сигнатуры методов без их реализации.
// Класс, который реализует интерфейс, обязан определить все методы, указанные в интерфейсе.
// Класс может реализовать несколько интерфейсов одновременно.
// Все методы, определённые в интерфейсах, должны быть общедоступными, что следует из самой природы интерфейса.
// Для реализации интерфейса исп-ся оператор implements
interface figureArea{
    public function setParametrs($a,$h);
    public function calculateArea();
}

class Triangle implements figureArea{
    
    public $base;
    public $height;
    public $area;

    public function setParametrs($a,$h)
    {
        $this->base=$a;
        $this->height=$h;
    }

    public function calculateArea()
    {
        print("Triangle area = " . $this->area = ($this->base * $this->height) * 0.5 . "<br>");
    }
}

class Square implements figureArea{
    public $side;
    public function setParametrs($a,$h = null)
    {
        $this->side = $a;
    }

    public function calculateArea()
    {
        print("Square area = " . $this->side * $this->side . "<br>");
    }
}

$Triangle = new Triangle();
$Triangle->setParametrs(a: 2.2,h: 4);
$Triangle->calculateArea();
echo "-----------------------<br>";
$Square  = new Square();
$Square->setParametrs(a: 5);
$Square->calculateArea();

// Интерфейс
// 1. Содержит только сигнатуры методов, но не их реализацию
// 2. Класс может реализовать несколько интерфейсов
// 3. Не может содержать переменные и константы
// 4. Все методы интерфейса должны быть публичными

// Абстрактный класс может реализовать часть ИНТЕРФЕЙСА, а класс его расширяющий(дочерний) должен реализовать всё остальное.
interface voice {
    public function giveVoice();
    public function getName();
}

abstract class wolf implements voice{
    function giveVoice(){
        print("I do Aoouu. I'm " . __CLASS__ . "<br>");
    }
}

class dog extends wolf {
    function getName(){
        parent::giveVoice();
        print("I'm " . __CLASS__ . " and i do GAV GAV <br>");
    }
}

$beast = new dog();
$beast->getName();
?>

</body>
</html>