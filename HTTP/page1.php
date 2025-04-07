<?php
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = "Не введено!";
    }
    // Чтобы защититься от XSS-атак и некорректного отображения нужно использовать htmlspecialchars()
    // Без защиты
    echo "Ваше имя через \$_POST : $name <br>";
    // С защитой 
    // echo "Ваше имя через \$_POST : " . htmlspecialchars($name) . '<br>';
    
    /* $_SERVER — это специальный встроенный массив в PHP, который содержит всю важную информацию о:
    - вашем сервере
    - текущем посетителе
    - самом запросе
    */
    echo $_SERVER['PHP_SELF'] . '<br>'; // Расположение файла
    echo 'Method : ' . $_SERVER['REQUEST_METHOD'] . '<br>'; // Метод запроса (GET, POST, PUT и т.д.)
    echo $_SERVER['REQUEST_URI'] . '<br>'; // Запрошенный адрес
    echo $_SERVER['HTTP_USER_AGENT'] . '<br>'; // Браузер и ОС (например, 'Chrome на Windows')
    echo 'IP : ' . $_SERVER['REMOTE_ADDR'] . '<br>'; // IP-адрес 
    echo 'ПО : ' . $_SERVER['SERVER_SOFTWARE'] . '<br>';  // Какое ПО работает на сервере
    echo 'Пришёл с этой страницы : ' . $_SERVER['HTTP_REFERER'] . '<br>'; // С какой страницы пришёл пользователь (может отсутствовать)
?> 