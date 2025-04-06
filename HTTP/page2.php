<?php
    if (!empty($_GET['lastname'])) {
        $lname = $_GET['lastname'];
    } else {
        $lname = "Не введено!";
    }
    echo "Ваша фамилия через \$_GET : $lname <br>";
    // $_REQUEST — это суперглобальная переменная PHP, которая содержит содержимое $_GET, $_POST и $_COOKIE. 
    // Она используется для сбора данных, отправленных с помощью методов GET и POST, а также файлов cookie.
    $lname = !empty($_REQUEST['lastname']) ? $_REQUEST['lastname'] : "Не введено!";
    echo "Ваша фамилия через \$_REQUEST : $lname <br>";

?>