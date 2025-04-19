<?php
    // Начинаем сессию
    session_start();

    // Инициализируем корзину, если её нет
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['item'])){
        $_SESSION['cart'][] = $_POST['item'];
        $message = "Добавлено в корзину : " . htmlspecialchars($_POST['item']);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кафе</title>
</head>
<body>
    <h1>Добро пожаловать в наше кафе, <?= $_SESSION['name'] ?? 'Гость' ?>!</h1>

    <?php if(isset($message)): ?>
        <p style="color:green;"><?php echo $message; ?></p>
    <?php endif; ?>
    <h2>Меню :</h2>
    <form action="" method="POST">
        <select name="item" id="">
            <option value="Кофе">Кофе - 75 р.</option>
            <option value="Чай">Чай - 50 р.</option>
            <option value="Бутерброд">Бутерброд - 100р. </option>
            <option value="Пирог">Пирог - 150 р.</option>
        </select>
        <button type="submit">Добавить в заказ</button>
    </form>
    <div style="margin-top: 20px">
        <a href="page2.php" style="color: red;">Мой заказ</a>
    </div>
    <?php if(!isset($_SESSION['name'])):?>
        <form action="page1.php" method="POST">
            <h3>Представьтесь : </h3>
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="submit" value="Сохранить">
        </form>
    <?php endif; ?>    
    <?php 
    // Обработка формы с именем
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
        $_SESSION['name'] = htmlspecialchars($_POST['name']);
        header("Location: page1.php");
        exit;
    }
    ?>
</body> 
</html>