<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Перечисления</title>
</head>
<body>

<?php
// php 8.1
// Перечисления - это специальный тип данных, который позволяет создавать набор констант с определёнными значениями.
// Эти значения не могут изменяться и используются для удобства в коде. 
enum DaysOfWeek : string
{
    case MONDAY = "Понедельник";
    case TUESDAY = "Вторник";
    case WEDNESDAY = "Среда";
    case THURSDAY = "Четверг";
    case FRIDAY = "Пятница";
    case SATURDAY = "Суббота";
    case SUNDAY = "Воскресенье";
}

$today = DaysOfWeek::FRIDAY;
print_r($today); // Значения перечислений на самом деле являются объектами
echo "<br>" . $today -> value; // Чтобы достать значение из переменной дописываем value
?>

</body>
</html>