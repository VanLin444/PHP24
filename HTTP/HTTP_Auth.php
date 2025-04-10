<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP-auth</title>
</head>
<body>
    <?php 
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Требуется авторизация';
            exit;
        } else {
            $valid_user = 'admin';
            $valid_pass = '12345';
            
            if ($_SERVER['PHP_AUTH_USER'] != $valid_user || 
                $_SERVER['PHP_AUTH_PW'] != $valid_pass) {
                header('HTTP/1.0 401 Unauthorized');
                echo 'Неверные данные';
                exit;
            }
            
            echo "Добро пожаловать, {$_SERVER['PHP_AUTH_USER']}!";
        }
    ?>
</body>
</html>