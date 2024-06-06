<?php
/*
$until_new_year= 365 - date('z'); //date("z") от 0 - 365 
echo "До нового года : $until_new_year дней";

echo "<br>";

echo 13 === "13";
*/

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