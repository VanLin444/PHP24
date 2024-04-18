<?php

$childName = "Boruto";
if ($childName != "Himavari"){
    echo "Himavaru top, Boruto RETARD! <br>";
}

$name = "Hinata";
if ($name == "Sakura"){
    echo "$name stupid <br>";
} else{
    echo "$name top waifu! <br>";
}

$famyliMember = "Itachi";
if ($famyliMember == "Fugaku"){
    echo "It's his father <br>";
} elseif ($famyliMember == "Mikoto"){
    echo "It's hit mother <br>";
} elseif ($famyliMember == "Itachi"){
    echo "It's his BROTHER...<br>";
} else {
    echo "I don't know who is it...";
}

// Альтернативный систаксис управляющих структур
$skill = "Rasengan";
if ($skill != "Chidori"):
    echo "HIGH Skill <br>";
else:
    echo "LOW Skill <br>";
endif;

// Тернарный оператор - выражение, а if-else это конструкция
// Он единственный в своем роде оператор, требующий три операнда

$tails = 9;
echo $tails > 1 ? "Kurama <br>" : "I don't know who is it...<br>";

// Оператор switch похож на ряд операторов IF с одинаковым условием. 
$hokageName = "Minato Namikaze";

switch ($hokageName){
    case "Hashirama Senju":
        echo "First Hokage";
        break;
    case "Tobirama Senju":
        echo "Secodt Hokage";
        break;
    case "Hiruzen Sarutobi":
        echo "Third Hokage";
        break;
    case "Minato Namikaze":
        echo "Fourth Hokage";
        break;

    default:
    echo "Unknown Hokage";
}
?>