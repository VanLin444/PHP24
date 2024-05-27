<?php
$countHokage = 1;
while ($countHokage != 7){
    echo "$countHokage - Hokage <br>";
    $countHokage++;
}

echo "<br>";

$countNinja = 1;
do {
    echo "$countNinja enemy ninja killed <br>";
    $countNinja++;
} while ($countNinja < 4);

echo "<br>";

for ($word = 0; $word < 5;$word++){
    echo "NARUTO KUN<br>";
}

echo "<br>";

echo "Team Seven :<br>";
$teamSeven = ["Kakashi", "Naruto", "Sasuke", "Sakura"];
foreach($teamSeven as $ninja){
    echo "$ninja <br>";
}

echo "<br>";

echo "HOKAGE :<br>";
$hokage = ["First" => "Senju Hashirama", "Second" => "Tobirama Senju", "Third" => "Sarutobi Hiruzen", "Fourth" => "Namikaze Minato"];
foreach ($hokage as $number => $name){
    echo "$number hokage is $name <br>";
}

echo "<br>";

$villageName = "Konohagakure";
switch ($villageName){
    case "Sunagakure":
        echo "Suna";
        break;
    case "Kirigakure":
        echo "Kiri";
        break;
    case "Iwagakure":
        echo "Iwa";
        break;
    case "Konohagakure":
        echo "Konoha";
        break;
    default:
    echo "Anon village";
}

echo "<br>";

// В отличие от switch, в match используется строгое сравнение (===), а не слабое (==).
$family = "Uzumaki";
$name = match ($family){
    "Uchiha" => "Sasuke",
    "Senju" => "Tsunade",
    "Uzumaki" => "Karin",
    "Uzumaki" => "Naruto"
};
echo "Uzumaki number one - " . $name;
?>