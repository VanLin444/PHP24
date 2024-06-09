<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Исключения</title>
</head>
<body>

<?php
 // Исключения - это специальные ситуации, которые могут возникнуть во время выполнения программы и привести к ошибке.
 // Когда происходит исключение, PHP останавливает выполнение программы и ищет блок кода, который может обработать это исключение.
 /*
  Интерфейс Throwable предоставляет ряд методов, которые позволяют получить некоторую информацию о возникшем исключении:
  getMessage(): возвращает сообщение об ошибке
  getCode(): возвращает код исключения
  getFile(): возвращает название файла, в котором возникла ошибка
  getLine(): возвращает номер строки, в которой возникла ошибка
  getTrace(): возвращает трассировку стека
  getTraceAsString(): возвращает трассировку стека в виде строки
 */
 function dev($x){
    return 1/$x;
 }

 // Ловим ошибку деления числа на 0 и обрабатываем её
 try {
    dev(0);
 } catch (Throwable $ex) {
    echo "Произошла ошибка: " , $ex -> getMessage();
 }

 class User {
    protected $name;
    protected $age;

    function __construct($name, $age) {
        if ($age <= 0) {
            throw new Exception("Недействительный возраст<br>");
        }
        $this -> name = $name;
        $this -> age = $age;
    }

    function getInfo() {
        echo "Name - $this->name <br> Age - $this->age <br>";
    }
 }

 $himavari = new User("Himavari", -1000);
 $himavari -> getInfo();
?>

</body>
</html>