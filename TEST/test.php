<?php
/*
$until_new_year= 365 - date('z'); //date("z") от 0 - 365 
echo "До нового года : $until_new_year дней";

echo "<br>";

echo 13 === "13";
*/
class art {
    public function sum ($per1, $per2) {
        return $per1 + $per2;
    }
    public function sum ($per1, $per2, $per3) {
        return $per1 + $per2 + $per3;
    }
}
?>