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

$connect = mysqli_connect('localhost','root','root','films','8889');
if (!$connect){
    die("Ошибка подключения к БД...<br>");
}
echo "Connected to DataBase<br>";

$films = mysqli_query($connect, "SELECT * FROM `films`");
$films = mysqli_fetch_all($films);
echo '<pre>';
print_r($films);
echo '</pre>';
?>