<?php
// Reverse string
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
echo rev($str);
?>