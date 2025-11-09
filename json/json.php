<?php
$arr = [
    1 => "Fire",
    2 => "Water",
    3 => "Earth",
    4 => "Air",
];
$json = json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);