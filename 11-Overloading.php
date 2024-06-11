<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>Перегрузка</title>
</head>
<body>

<?php
// Перегрузка в PHP означает возможность динамически "создавать" свойства и методы. 
// Эти динамические сущности обрабатываются с помощью "волшебных" методов, которые можно создать в классе для различных видов действий.

class Teleport {
    private $data = [];
    
    public function __set($new_coordinate, $value){
        $this -> data[$new_coordinate] = $value;
    }

    public function __get($name){
        return $this -> data[$name];
    }
}

$position = new Teleport;
$position -> new_coordinate = [1, 1, 1];
print_r($position -> new_coordinate);
?>

</body>
</html>