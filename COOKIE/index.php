<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output.php" method="POST" target="_blank">
        <select name="selloc" id="">
            <option value="Россия">Россия</option>
            <option value="Китай">Китай</option>
            <option value="США">США</option>
            <option value="Франция">Франция</option>
            <option value="Германия">Германия</option>
        </select>
        <input type="submit" value="Выбрать">
        <br>
        <!-- Из-за приоритетов операторов вначале выполнялась конкатенация, а потом уже тернарный оператор, поэтому выводилась только локация т.к там текст и это не пустая строка значит = TRUE -->
        <!-- Можно просто закрыть в скобки тернарный оператор (isset..?..:..;) -->
        <?php 
            $location = isset($_COOKIE['location']) ? $_COOKIE['location'] : "Не определено!";
            echo "Ваше местоположение : " . $location; 
        ?>
    </form>
    <!-- Для удаления куки его нужно повторно установить с настройкой уже истёкшей даты. В данном случае на месяц назад т.к у пользователя может быть неправильное время -->
    <button><?php setcookie('location', $_COOKIE['location'], time() - 259000,  "/");?> Удалить COOKIE</button>
</body>
</html>