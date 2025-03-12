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

$familyMember = "Itachi";
if ($familyMember == "Fugaku"){
    echo "It's his father <br>";
} elseif ($familyMember == "Mikoto"){
    echo "It's his mother <br>";
} elseif ($familyMember == "Itachi"){
    echo "It's his BROTHER...<br>";
} else {
    echo "I don't know who is it...";
}

// Альтернативный систаксис управляющих структур
$skill = "Rasengan";
if ($skill != "Chidori"):
    echo "HIGH Skill <br>";
    echo "HIGH Skill <br>";
else:
    echo "LOW Skill <br>";
endif;

// Тернарный оператор - выражение, а if-else это конструкция
// Он единственный в своем роде оператор, требующий три операнда

$tails = 9;
echo ($tails > 8 and $tails < 10) ? "Kurama <br>" : "I don't know who is it...<br>";

// Оператор switch похож на ряд операторов IF с одинаковым условием. 
$hokageName = "Minato Namikaze";

switch ($hokageName){
    case "Hashirama Senju":
        echo "First Hokage";
        break;
    case "Tobirama Senju":
        echo "Second Hokage";
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

echo "<br>";

// В отличие от switch, в match(выражение) используется строгое сравнение (===), а не слабое (==).
$family = "Uzumaki";
$name = match ($family){
    "Uchiha" => "Sasuke",
    "Senju" => "Tsunade",
    "Uzumaki" => "Karin",
    "Uzumaki" => "Naruto",
    default => "Unknown"
};
echo "Uzumaki number one - " . $name;
?>