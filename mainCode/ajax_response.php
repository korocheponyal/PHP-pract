<?php

// header('WWW-Authenticate: NTLM', false);
// header("Content-type:application/json");
// header("HTTP/1.1 404 Not Found");
header("Content-type:text/html",false);

$json = ["success"=>false,
         "result"=>0];


if(isset($_POST["firstnumber"],$_POST["secondnumber"],$_POST["option"])){
    $firstnumber = (int) $_POST["firstnumber"];
    $secondnumber = (int) $_POST["secondnumber"];
    $option = $_POST["option"];
$json["result"] = $_POST["option"] == "+" ?   $firstnumber + $secondnumber : $firstnumber - $secondnumber;
$json["success"] = true;

}

echo json_encode($json); 

//header,content-type какие виды,
//как работают алогритмы сортировки,асимптотика,о-биг,линейное время и логорифмическое какое быстрее?

