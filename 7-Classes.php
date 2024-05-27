<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Classes</title>
</head>
<body>

<?php

// $this - значение вызывающего объекта. То есть указатель именно на этот объект.

class Ninja {
    public $name;
    public $rank;
    public $skills;

    public function setInfo($nameNinja,$rankNinja,$skillsNinja){
        $this->name = $nameNinja;
        $this->rank = $rankNinja;
        $this->skills = $skillsNinja;
    }

    public function getInfo(){
        echo "$this->name <br>";
        echo "$this->rank <br>";
        foreach ($this->skills as $skill){
            echo "$skill / ";
        }
    }

}

$nameNinja = "Naruto Uzumaki";
$rankNinja = "S";
$skillsNinja = ["Rasengan", "Kagebunshin", "Sexy Jutsu"];
$ninkon = new Ninja();
$ninkon->setInfo($nameNinja,$rankNinja,$skillsNinja);
$ninkon->getInfo();

echo "<br>";

class BodyTemp{
    public $temp = 36.6;
    function killVirus(){
        $this->temp+=1;
    }

    function getTemp(){
        echo $this->temp;
    }
}

class MaleTemp extends BodyTemp{
    // Переопределяем свойство temp 
    public $temp = 37.1; 
}

$testTemp = new MaleTemp();
$testTemp->getTemp();

echo "<br>";

//Конструкторы - это обычные методы, которые вызываются при инстанциировании соответствующих объектов.
//Деструктор будет вызван при освобождении всех ссылок на определённый объект или при завершении скрипта.
class Luntik{
    function __construct(){
        echo "<br> Я родился :)";
    }

    function __destruct(){
        echo "<br> Я помер :(";
    }
}

$stateLuntik = new Luntik();
unset($stateLuntik); // Удаляем объект stateLuntik
echo "<br> Программа ещё что-то делает...";

echo "<br>";


Class MyInfo{
    public $name = "Ivan";
    public $age = 23;

    protected $weight = 110;
    protected $growth = 194;

    private $secondName = "Antipov";
    private $telephoneNumber = "89083384004";

    public function getInfo(){
        echo $this->name;
        echo $this->weight;
        echo $this->secondName;
    }

    protected function getProtected() {
        echo "<br>Функция protected";
    }

    private function getPrivate(){
        echo "<br>Функция private";
    }



}

// Мы можем переопределить общедоступные и защищённые свойства, но не закрытые

class MyInfo2 extends MyInfo{ 
    protected $weight = 107;

    // Мы можем вызвать функцию с областью видимости protected т.к
    // Класс MyInfo2 является дочерним классом MyInfo
    // Но мы не можем вызвать функцию области видимости private т.е
    // Она является часть родительского класса MyInfo и не наследуется
    public function callFunction(){
        $this->getProtected();
    }

}

// Напрямую мы не можем вызвать функции с областью видимости private и protected
// Но мы можем это сделать через фуекцию с областью видимости public
$meInfo = new MyInfo2();
$meInfo->getInfo();
$meInfo->callFunction();

echo "<br>";

// Абстрактный класс
abstract class Tree {

    abstract protected function Grow();
    abstract protected function Swing();
}

class Oak extends Tree{
    public function Grow(){
        echo "Я росту";
    }

    public function Swing(){
        echo "Я качаюсь";
    }
}

$treeSkills = new Oak();
$treeSkills->Grow();
$treeSkills->Swing();

echo "<br>";

// Интерфейс
interface TriangelArea{
    public function setParametrs($a,$h);
    public function getParametrs();
    public function calculateArea();
}

class T_AreaMethodOne implements TriangelArea{
    
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
        $this->area = ($this->base * $this->height) * 0.5;
    }

    public function getParametrs()
    {
        echo $this->area;
    }
}

$Test = new T_AreaMethodOne();
$Test->setParametrs(2.2,4);
$Test->calculateArea();
$Test->getParametrs();

echo "<br>";

// Трейты
trait playerInfo{
    public function HP_Recovery(){echo $this->HP;}
    public function MP_Recovery(){echo $this->MP;}
    public function SP_Recovery(){echo $this->SP;}
}

class Humans{
    use playerInfo;
    public $HP=100;
    public $MP=100;
    public $SP=100;
    
}

class Orcs{
    use playerInfo;
    public $HP=125;
    public $MP=50;
    public $SP=125;
    
}

class Elfs{
    use playerInfo;
    public $HP=75;
    public $MP=150;
    public $SP=75;
    
}
 
$player = new Elfs();
$player->HP_Recovery();
$player->MP_Recovery();
$player->SP_Recovery();

echo "<br>";

// Анонимный класс
$beast = new class{
    public function howl(){
        echo "AUUUU";
    }
};
$beast->howl();

echo "<br>";


?>

</body>
</html>