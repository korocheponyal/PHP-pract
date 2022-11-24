<?php

// $x = -10.8;
// echo abs($x);//абсолютная величина числа
// echo round($x,2);
// echo floor(5.9);//округляет в меньшую
// echo ceil(3.3);//округляет в большую
// echo mt_rand(7,15);

// $read_file = fopen("text.txt", "r");
// var_dump($read_file);

// for($i=0; $i<2; $i++){
//     // $line[] = $s;
//     echo fgets($read_file);
//     // echo $s ."<br>";
// }

// fclose($read_file);
// echo min([1,2]);
// echo max([1,2]);

// ($f = fopen("https://www.php.net/manual/ru/function.fopen.php","rt")) or die("error");//or оператор ниже чем равно
// echo $f;
// //тип данных resource

// $temp = tmpfile();
// fwrite($temp,"hello");
// fseek($temp,0);
// echo fread($temp,1024);
// fclose($temp);

// $file = fopen("File.csv","r+") or die("error");
// echo fgets($file);
// fputs($file,"Hello Vasya");
// echo fwrite($file,"hello anna");
// // echo fread($file,1024);
// fclose($file);

// echo basename("test/File.csv");
// echo dirname("File.csv");
// echo realpath(".");
// echo copy("main.php","main3.php");
// // rename("test1.php","main333333333.php");
// // unlink("main333333333.php");
// // echo file_get_contents("newLesson.php");
// // var_dump(file("newLesson.php"));
// $data = file_get_contents("images.jpg");
// echo $data;
// file_put_contents("NewImage.jpg",$data);
// $file = "file.txt";
// fclose(fopen($file,"a+b"));
// $f = fopen($file,file_exists($file) ?"r+b" :"w+b") or die("errror");
// flock($f,LOCK_UN);
// fclose($f);

//алгоритм который находит наибольший элемент массива
// =fopen,file-get-content,file()
//отличия построчное блочное чтение и целиком чтение
//flock какие флаги
//скачать с гугла сиэсви прочиать построчно и цикликом
//посчитать кол-во строк в файле и что-то добавить в конце файла
//cji script


// $array = [4,3,2,1,5];

// $arr = [];

// for($i=0;$i<count($array);$i++){
//     for($j=0;$j<count($array);$j++)
//     if($i<$j){
//         $arr[] = $i;
//     }
// }
// var_dump($arr);


// $arr = [14,12,1,4,4,5,13,13,13,7];
// $x = 14;


// function find_numb($arr,$x){
//     $numb = false;
// foreach($arr as $k){
//     if($x == $k){
//         $numb = true;
//         break;
//     }
    
// }
// echo $numb ? "TRUE" : "FALSE";
// }


// find_numb($arr,122);

// function how_much($arr,$x){
//     $c = 0;
//     foreach($arr as $v){
//         if($x == $v ){
//             $c += 1;
//         }
//     }
//     echo $c;
// }

// how_much($arr,13);

// $max = 0;
// $min = 0;
// $array = [1,2,12,122,21,10,122];

// foreach ($array as $key => $value) {
//     if($value>$max){
//         $max = $value;
//     }
    
// }

// echo $max . '<br>';



