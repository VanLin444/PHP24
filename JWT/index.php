<?php 
//require 'jwt.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styles.css">
    <title>JWT</title>
</head>
<body>
    <legend>Authorization</legend>
    <form action="jwt.php" method="POST" class="">
        <label for="">Username :</label>
        <input type="text" name="username" placeholder="Enter Username" required>
        <label for="">Password :</label>
        <input type="text" name="password" placeholder="Enter Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>