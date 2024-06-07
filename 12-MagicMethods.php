<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Магические методы</title>
</head>
<body>

<?php

class MagicMethods {

    private $data = []; // место хранениея перегружаемых данных
    protected $text = "Я оригинальный Наруто!!!";
    protected $delete;

    // Вызывается при создании нового объекта
    public function __construct(){
        echo "Я конструктор! Новый объект создан...<br>";
    }
    
    // Вызывается при уничтожении объекта
    public function __destruct(){
        echo "Я деструктор! Объект уничтожен...<br>";
    }

    // Вызывается, когда вызывается несуществующий или недоступный(защищённый или приватный) метод объекта
    public function __call($methodName, $methodArguments){
        print_r("Вызван несуществующий или недоступный метод $methodName c аргументом $methodArguments[0]<br>");
    }

    // Будет вызван при записи данных в недоступные(защищённые или приватные) или несуществующие свойства.
    public function __set($name, $value){
        echo "Установка переменной $name с значением $value <br>";
        $this->data[$name] = $value;
        echo print_r($this->data) . "<br>";
    }

    // Будет вызван при чтении данных из недоступных(защищённых или приватных) или несуществующих свойств.
    public function __get($name){
        echo "Чтение недоступного свойства $name <br>";
    }

    // Будет вызван при использовании isset() или empty() на недоступных(защищённых или приватных) или несуществующих свойствах.
    public function __isset($name){
        echo "Проверка существования $name - " . isset($this->$name) . "<br>";
    }

    // Будет вызван при вызове unset() на недоступном(защищённом или приватном) или несуществующем свойстве.
    public function __unset($name){
        echo "Удаление $name <br>";
        unset($this->$name);
    }

    // Вызывается при попытке преобразовать объект в строку.
    public function __toString(){
        return "Попытка преобразовать объект в строку...<br>";
    }

    // Вызывается при попытке вызвать объект как функцию.
    public function __invoke($arg){
        echo "Попытка вызвать объект  как функцию с аргументом $arg...<br>";
    }

    // Вызывается при клонировании объекта
    public function __clone(){
        echo $this->text = "Я клон " . $this->text . "<br>";
    }
}

$method = new MagicMethods();
$method -> Ivan = 26; // несуществующее свойство
$method -> gameSaves("Save files"); // несуществующий метод
$method -> data; // Недоступное свойство
isset($method->data); // Cуществует ли свойство data
unset($method->delete); // Удаление свойства data
echo $method;
$method("AVADA KEDAVRA");
$secondMethod = clone $method;

?>

</body>
</html>