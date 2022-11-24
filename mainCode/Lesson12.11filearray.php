<?php
// $from = ["{title}","{body}"];
// $to = ["heel big","word"];

// $template =<<<MARKER 
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>{title}</title>
// </head>
// <body>
// {body}  
// </body>
// </html>
// MARKER;


// echo str_replace($from, $to, $template);
// echo $_SERVER;
// var_dump(phpinfo());

// $userData = "http &://127.0.0.1:5500/project/python/mainCode/Lesson12.11filearray.php";
// echo "<a href=". urlencode($userData) ." >link</a>"; //функция нужна для передачи корректных данных если в ссылке встретиться & или пробел
// echo urldecode("http+%26%3A%2F%2F127.0.0.1%3A5500%2Fproject%2Fpython%2FmainCode%2FLesson12.11filearray.php");


// $text = htmlspecialchars("<a href='test'>test;\"</a>",ENT_QUOTES);
// echo $text;

// echo ucfirst("global function");
// setlocale(LC_CTYPE,"ru_RU.UTF-8");//активизирует указанную локаль для перевода в нижний регистр
// setlocale(LC_ALL,"");
// $x = 1;
// echo sprintf("какой-то текст%d%",$x);

// function city($ourtext,$maxlen = 60,$prefix = "> "){
//     $str = wordwrap($ourtext,$maxlen - strlen($prefix),"\n");
//     $str = $prefix . str_replace("\n","\n$prefix",$str);
//     return $str; 
// };

// echo city("fwwfsdfs  dfs  dfs  ddfs  
// dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  dfs  fs  dfs  dfs  dfs  dfs  
// dfs  dfs  dfs  dfs  dfs   fgsdf",20);

// strip_tags("<div>Test</div>");

// //pack && unpack

// echo md5("password12345" . "test");
// echo crc32("password12345" . "test");
// echo crypt("password12345" . "test");
// flush();

//сортировка произвольных массивов
/*
лексикографическое упорядочивание и числовое
сортировка по значениям асорт и арсорт
сортировка по ключам
пользовательская сортировка по ключам и по значениям
переворачивание массивов
"естественная" сортировка





