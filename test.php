<?php

$family = "Uzumaki";

function getFam(){
    global $family;
    $family .= "Namikadze";
    echo $family;
}
getFam();

echo '<br>';

echo $family;
?>