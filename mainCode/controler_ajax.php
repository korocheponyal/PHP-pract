<?php

// echo "get data " . $_GET["text"];




function d($v){
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
    }

d($_POST);
$arr = json_decode($_POST["json"],TRUE);
// $arr["name"] = 8;

// $name = join($arr);
// $result = "Hello";
// if(!empty($name)){
//     $result .= ",$name";
// }
// echo htmlspecialchars($result);
echo json_encode($arr);

// d($arr);
// script(дататайп) асинг(параметр) эрор параметр