<?php
/*
$until_new_year= 365 - date('z'); //date("z") от 0 - 365 
echo "До нового года : $until_new_year дней";

echo "<br>";

echo 13 === "13";
*/
/*
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

$obj = new Talker;
$obj ->smallTalk();
$obj ->bigTalk();
*/


/* // Reverse string
$str = "abrakadabra";

function rev($word){
    $res = "";
    $wordlen = strlen($word);
    for ($i = 0; $wordlen != 0; $i--){
        $res .= $word[$i - 1];
        $wordlen--;
    }
    return $res;
}
echo rev($str); */

/* // Проверка является ли число степень числа 2 
function checkTwoPow($x){
    while(true){
        if ($x == 1){
            return true;
        }
        if($x % 2 == 0){
            $x= $x / 2;
        } else {
            return false;
        }
    }
}
var_dump(checkTwoPow(2048));

var_dump(true || false && false); */

/* // Удаление повторяющегося элемента в массиве и вывод значений отличающихся от него
$nums = [1,5,6,9,2,5,3];
$val = 5;
function removeElement(&$nums, $val) {
    foreach ($nums as $ind => $el){
        if($el == $val){
            unset($nums[$ind]);
        }
    }
    return count($nums);
} */

// Доступ к защищённым методам класса через публичные
abstract class Animals {
    abstract protected function say();
}

class Tiger extends Animals {
    protected function say() {
        echo "Graa";
    }
}

class Cat extends Tiger {
    public function checkSay() {
        $this->say();
    }
}

$animal = new Cat();
$animal->checkSay();
?>