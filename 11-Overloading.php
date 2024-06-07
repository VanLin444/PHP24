<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Перегрузка</title>
</head>
<body>

<?php
// Перегрузка - это возможность создания методов или функций с одинаковым именем, но разными параметрами.
// Таким образом, в зависимости от переданных аргументов, будет вызываться соответствующая версия метода.
// final не даст перегрузить метод

class Press {
    public function press(){
        echo "Press F";
    }
}

class PressKey extends Press{
    protected $word;

    function __construct($word){
        $this->word = $word;
    }

    // перегрузили метод press
    function press(){
        echo "Press $this->word <br>";
    }
}

$clack = new PressKey("ENTER");
$clack->press();


?>

</body>
</html>