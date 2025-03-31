<?php
// Строки в PHP - это последовательности символов, которые являются одним из основных типов данных.
// Способы создания строк :
$uchiha = 'sharingan';
$huga = "biakugan";
$alucard = <<<EOD
Птицей Гермеса меня называют
свои крылья пожирая
сам себя я укрощаю
EOD;

echo '<br>';

// Длина строки
echo strlen($uchiha);
echo '<br>';

// Конкатенация (объединение строк)
echo $uchiha . " + " . $huga;
echo '<br>';

// Поиск позиции подстроки
echo strpos($uchiha, 'gan');
echo '<br>';

// Проверка наличия подстроки
echo str_contains($uchiha, 'gan');
echo '<br>';

// Начинается/заканчивается ли строка на подстроку
echo str_starts_with($huga, 'bi');
echo str_ends_with($hugo, 'gandam');
echo '<br>';

// Извлечение подстрок ( Строка , начальная позиция, Длина)
echo substr($huga, 2, 3);
?>