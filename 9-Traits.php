<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Traits</title>
</head>
<body>

<?php
// Трейты - это специальный механизм, который позволяет повторно использовать код в классах.
// Трейты позволяют добавлять методы в классы без необходимости наследования.
trait raceInfo{
    public function HP_Recovery(){echo "HP = $this->HP <br>";}
    public function MP_Recovery(){echo "MP = $this->MP <br>";}
    public function SP_Recovery(){echo "SP = $this->SP <br>";}
}

class Humans{
    use raceInfo;
    public $HP=100;
    public $MP=100;
    public $SP=100;
    
}

class Elfs{
    use raceInfo;
    public $HP=75;
    public $MP=150;
    public $SP=75;
    
}
 
$player = new Elfs();
print("Race - " . get_class($player) . "<br>"); // Получаем имя класса по его экземпляру (объекту)
print("Stats: <br>");
$player->HP_Recovery();
$player->MP_Recovery();
$player->SP_Recovery();

echo "<br>";

// Наследуемый метод из родительского класса samokat переопределяется методом из трейта, а
// Метод из трейта переопределяется методом из текущего класса
trait move {
    function drive($speed){
        echo "Скорость из трейта $speed км/ч <br>";
    }
}

class samokat {
    function drive($speed){
        echo "Скорость обычного самоката $speed км/ч <br>";
    }
}

class electrosamokat extends samokat {
    // Вызываю метод из родительского класса, пока он ещё не переопределён трейтом
    function __construct(){
        parent::drive(5);
    }

    use move;

    // Вызываем метод из трейта 
    function callTrait($speed){
        $this->drive($speed);
    }

    /*
    // Переопределяем метод из трейта в текущем классе
    // из-за этого мы уже не можем вызвать метод трейта т.к объект уже сформирован и метод трейта переопределён текущим классом
    // в зависимости от необходимости выбираем метод который нам нужен из трейта или текущего класса
    function drive($speed){
        echo "Скорость электросамоката $speed км/ч";
    }
    */

}

$user = new electrosamokat(); // При создании объекта вызывается родительский метод
$user->callTrait(10); // Вызываем метод трейта
//$user->drive(15); // Вызываем переопределённый метод из текущего класса
?>

</body>
</html>