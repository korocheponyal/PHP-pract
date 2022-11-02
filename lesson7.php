<?php
$db = new PDO('dblib:host=your_hostname;dbname=your_db;charset=UTF-8', $user, $pass);

$d = 1;
$d += $d;
var_dump($d);
?>