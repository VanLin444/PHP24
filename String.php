<?php
// Строки в PHP - это последовательности символов, которые являются одним из основных типов данных.
// Способы создания строк :
$uchiha = 'Sharingan';
$huga = "Biakugan";
$alucard = <<<EOD
Птицей Гермеса меня называют 
свои крылья пожирая 
сам себя я укрощаю
EOD;
$mefisto = 'Я — часть той силы, что вечно хочет зла и вечно совершает благо';
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
echo '<br>';

// Замена в строках (Что, На что, Где)
echo str_replace('sharin', 'rinne', $uchiha);
echo '<br>';

// Разделение строки в массив (Разделитель, Что разделяется)
print_r(explode(" ", $alucard));
echo '<br>';

// Соединение массива в строку
$mas = ['Камень', 'Ножницы', 'Бумага'];
echo implode(' + ',$mas);
echo '<br>';

// Изменение регистра
echo strtoupper($uchiha) . '<br>';
echo strtolower($huga) . '<br>';
echo mb_convert_case($mefisto, MB_CASE_TITLE, "UTF-8") . '<br>';

// Форматирование строк (s - string, d - int, e - float)
echo sprintf("Name: %s | Tails: %d", "Kurama", 9) . '<br>';

// При использовании нумерованных аргументов, спецификатор позиции n$ должен стоять сразу же за символом процента (%), до любого другого спецификатора
// Если бы это было в двойных кавычках, то нужно былобы экранировать $ - %2\$d
echo sprintf('Tails: %2$d | Name: %1$s', 'Shukaku', 1) . '<br>';

//Безопасность строк. Экранирование
/*
    Функция htmlspecialchars() в PHP используется для преобразования специальных символов HTML в их HTML-сущности (entities). 
    Это необходимо, чтобы предотвратить XSS-уязвимости (Cross-Site Scripting) и 
    корректно отображать пользовательский текст в веб-страницах без его интерпретации как HTML-кода.
    Пример уязвимости без экранирования : echo "<div>" . $_GET['user_input'] . "</div>";
                            С защитой :echo "<div>" . htmlspecialchars($_GET['user_input']) . "</div>";
    htmlspecialchars() — экранирует только <, >, &, ", '.
*/
$safe = htmlspecialchars("<script>alert('xss')</script>");
echo $safe . '<br>';

//Безопасность строк. Хеширование 
$secureHash = password_hash("password", PASSWORD_DEFAULT);

// Повторение строки
$repeated = str_repeat("NarutoKUN ", 10); 
echo $repeated . '<br>';

// Переворачивание строки
$reversed = strrev("Abracadabra");
echo $reversed . '<br>';

// Подсчет вхождений
$count = substr_count("Hello world", "l"); // 3
echo $count. '<br>';

?>