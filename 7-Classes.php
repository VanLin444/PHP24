<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Classes</title>
</head>
<body>

<?php
// new - это деректива для создания экземпляра класса.
// Свойства и методы класса живут в отдельных "пространствах имён"!
// Псевдо переменная $this - значение вызывающего объекта. То есть указатель именно на этот объект.
// this используется для обращения к нестатическим свойствам и методам внутри объекта класса.
// $this – это ссылка на сам объект, а self – на текущий класс.
// -> это оператор объекта. Даёт доступ к нестатическим свойствам.

class BodyTemp{
    public $temp = 36.6;
    function killVirus(){
        $this->temp+=1;
    }

    function getTemp(){
        echo $this->temp;
    }
}

// Класс умеет наследовать константы, методы и свойства другого класса через ключевое слово extends в объявлении класса. 
// Невозможно наследовать больше одного класса, одному классу разрешено наследовать только один базовый класс.
class MaleTemp extends BodyTemp{
    // Переопределяем свойство temp 
    public $temp = 37.1; 
}

$testTemp = new MaleTemp();
$testTemp->getTemp();

echo "<br>";

// :: это оператор разрешения области видимости. 
// Этот оператор разрешает обращаться к константе, статическому свойству и статическому методу класса или одному из его родителей.
// К свойствам и методам внутри самого класса обращаются через ключевые слова self, parent и static.
// self - ключевое слово, которое используется для обращения к текущему свойству или методу внутри класса.
// self используется для обращения к статическим свойствам и методам внутри класса.
// parent - ключевое слово, которое используется для обращения к родительскому классу и получения доступа к свойствам и методам родительского класса.
// static - ключевое слово, которое используется для объявления статических свойств и методов в классе.
// Статические свойства и методы принадлежат классу в целом, а не конкретному экземпляру класса(объекту).
// Это значит, что они могут быть вызваны и доступны из любой части программы.
class Ninja {
    public $name;
    public $rank;
    static $village = "Konoha";

    function setInf($name, $rank){
        $this->name = $name;
        $this->rank = $rank;
        self::getInf($name, $rank);
    }

    static function getInf($name, $rank){
        print("|name :$name  |rank : $rank|village :". self::$village . "<br>");
    }
}

class Genin extends Ninja {
    function callParentMethod(){
        parent::setInf("Shikamaru", "Chunin");
    }
}
$konNin = new Ninja;
$konNin->setInf("Naruto", "Genin");

$konGen = new Genin;
$konGen -> callParentMethod();


// Конструктор - это специальный метод класса, который вызывается автоматически при создании нового объекта этого класса.
// Он используются для инициализации объекта и установки начальных значений его свойств.
// Деструктор - это специальный метод класса, вызывается автоматически при удалении ебъекта из памяти или при завершении скрипта.
// Он позволяет освободить ресурсы, которые были выделены объекту во время его жизни.
class Luntik{
    function __construct(){
        echo "Я родился :) <br> ";
    }

    function __destruct(){
        echo "Я умер :( <br> ";
    }
}

$stateLuntik = new Luntik();
unset($stateLuntik); // Удаляем объект stateLuntik


// Области видимости - Модификаторы доступа
// Public - это модификатор доступа, который позволяет обращатьсяк свойствам и методам класса из любого места программы.
// Protected - это модификатор доступа, который позволяет обращаться к свойствам и методам класса только из самого класса или его наследников.
// Private - это модификатордоступа, который позволяет обращаться к свойствам и методам только из самого класса, но не из его наследников.
// Видимость методов, свойств и констант можно ослабить, но не ограничить. За исключением конструкторов!
// protected -> public --- GOOD
// public -> private ----- ERROR
/*
  _
p| |_
u| pr|_
b|   ot|_
l|    ect|_
i|       ed|_private
c|___________|
*/
Class User{
    public $name = "Ivan";
    public $age = 23;

    protected $weight = 110;
    protected $growth = 194;

    private $secondName = "Suvorov";

    public function getInfo(){
        print("Hello I'm $this->name $this->secondName and I'm $this->age years old! <br>");
    }

    protected function getProtected() {
        echo "Функция protected";
    }

    private function getPrivate(){
        echo "Функция private";
    }
}

// Мы можем переопределить общедоступные и защищённые свойства, но не закрытые
    // Мы можем вызвать функцию с областью видимости protected т.к
    // Класс MyInfo2 является дочерним классом MyInfo
    // Но мы не можем вызвать функцию области видимости private т.к
    // Она является часть родительского класса MyInfo и не наследуется!
class MyInfo extends User{ 
    protected $weight = 107;

    public function callFunction(){
        $this->getProtected();
    }

}

// Напрямую мы не можем вызвать функции с областью видимости private и protected
// Но мы можем это сделать через фуекцию с областью видимости public
$meInfo = new MyInfo();
$meInfo->getInfo();
$meInfo->callFunction();

echo "<br>";

// Абстрактный класс - это класс, который содержит абстрактные методы(методы без реализации), которые должны быть реализованы в дочерних классах.
// Этот класс не может быть создан напрямую, он служит в качестве шаблона для других классов, которые должны наследовать его и реализовывать все его абстрактные методы.
// Так же абстрактный класс может содержать как обычные методы, так и переменные.
// Абстрактные классы помогают организовать код и обеспечивают структуру для классов-наследников.
abstract class Tree {

    abstract protected function Grow();
    public function say(){echo "I'm GROOOT <br>";} //В абстрактном классе так же могут быть обычные методы с реализацией
    protected $growth_rate;
}

// Дуб
class Oak extends Tree{
    public $growth_rate = 20;
    public function Grow(){
        print("Я " . __CLASS__ . " и я расту со скоростью $this->growth_rate см/год <br>");
    }
}

// Сосна
class Pine extends Tree{
    public $growth_rate = 40;
    public function Grow(){
        print("Я " . __CLASS__ . " и я расту со скоростью $this->growth_rate см/год <br>");
    }
}

echo "Абстрактный класс: <br>";
$new_tree = new Oak();
$new_tree->Grow();
$new_tree->say();

$new_tree = new Pine();
$new_tree->Grow();
$new_tree->say();

// 1. Может содержать как абстрактные так и обычные методы.
// 2. Класс может реализовать только один абстрактный класс.
// 3. Может содержать переменные и константы.
// 4. Может иметь защищённые методы и свойства.
// Абстрактный класс может реализовать часть ИНТЕРФЕЙСА, а класс его расширяющий(дочерний) должен реализовать всё остальное.

echo "<br>";

// Анонимный класс - способ создания класса без явного указания имени.
// Они удобны когда нужно создать класс для одного конкретного случая (использования).
$beast = new class{
    public function howl(){
        echo "AUUUU";
    }
};
$beast->howl();

echo "<br>";
// В данном примере наша анонимная функция является возвращаемым значением функции getInfo()
class Planet {
    protected $number;
    private $color;

    function setInfo($number, $color){
        $this -> number = $number;
        $this -> color = $color;
    }

    function getInfo(){
        return new class($this->number, $this->color) extends Planet{

            function __construct($current_number, $current_color)
            {
                echo "Planet number : $current_number <br>";
                echo "Planet color : $current_color <br>";
            }
        };
    }
}

$curPlanet = new Planet;
$curPlanet -> setInfo("4", "Red"); // Устанавливаем значения переменных number и color
$curPlanet -> getInfo(); // Вызываем функцию getInfo где возвращаемое значение это анонимный класс, который расширяет главный гласс и вызывается construct где и происходит вывод


?>

</body>
</html>