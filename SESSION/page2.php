<?php 
    session_start();

    // Очистка заказа
    if(isset($_GET['clear'])){
        $_SESSION['cart'] = [];
        header("Location: page2.php");
        exit;
    }

    // Удалени отдельных позиций заказа
    if(isset($_GET['remove'])){
       $index = (int) $_GET['remove'];
       if(isset($_SESSION['cart'][$index])){
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
       }
       header("Location: page2.php");
       exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
</head>
<body>
    <h1>Ваш заказ, <?= $_SESSION['name'] ?? 'Гость' ?></h1>
    <?php foreach($_SESSION['cart'] as $index => $item):?>
        <ul>
            <li>
                <?= htmlspecialchars($item) ?>
                <a href="page2.php?remove=<?= $index ?>">[Удалить]</a>
            </li>
        </ul>
    <?php endforeach; ?>
    <p>Всего позиций - <?= count($_SESSION['cart']); ?></p>
    <a href="page2.php?clear=1">Очистить корзину</a>
    <hr style="width:15%; border:none; border-top: 2px solid #000; margin-left:0;">
    <a href="page1.php">Вернуться к заказу</a>
</body>
</html>