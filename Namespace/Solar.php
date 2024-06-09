<?php
// Пространство имён - это специальная область, которая позволяет избежать конфликтов имен между различными классами, функциями и переменными.
// Пространство имен позволяет организовать код в логические группы и обращаться к элементам этих групп без опасения пересечения имен.
// Перед объявлением пространства имён разрешено только три элемента: declare, комментарии и пространства.
namespace SolarSystem;
class Planet {
    public $name;
    public $number;

    public function setInfo($name, $number){
        $this -> name = $name;
        $this -> number = $number;
    }
    public function getInfo(){
        echo "From namespace " . __NAMESPACE__ . " - " .$this -> name . " number is " . $this -> number . "<br>";
    }
}
?>
