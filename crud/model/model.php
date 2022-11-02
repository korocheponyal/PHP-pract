<?php
try {
$user = "root";
$pass = "";
$host = "localhost";
$dbname ="crud";

 $db = new PDO("mysql:host=$host;dbname=$dbname",  $user, $pass);
  
} catch (\Exception $e) {
//  throw new Exception('error', 0, $e);
echo $e->getMessage();

}

// ПАТТЕРН MVC

