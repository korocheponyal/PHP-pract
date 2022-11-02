<?php
// function getSum($x,$a){
//     return $x+$a;
// }
// echo getSum(3,5);
//17.10 2:00

// function plus5($x){
//      $x +=5;
// return $x;
// }
// $a=3;
// echo $a .'<br>';
// echo plus5($a) .'<br>';
// echo $a .'<br>';
// 2:40
// 17.10 16.22

// function getSum(float $x,float $y){
//      return $x + $y;
// }

// function getSumofCos(float $x,float $y){
//      $cosx = cos($x);
//      $cosy = cos($y);
//      return getSum($cosx,$cosy;)

// }

// echo getSumofCos(2.44,3.23);

// function getMax(int $x,int $y){
//      if($x > $y){
//      return $x;}
     
//      return $y; 
// }

// $a=10;
// $c=6;

// echo "наибольшее число - " . getMax($a,$c);

// function power($x,$n){
//      if($n == 1){
//           return $x;
//      }
//      return $x * power($x,$n - 1);
// }
// echo power(2,3);

// function getMin($a,$b,$c){ 
//      if ($a < $b && $a < $c){
//           return $a;
//      }
//      elseif ($b < $a && $b < $c){
//           return $b;
//      }
//      elseif ($c < $a && $c < $b){
//           return $c;
//      }
//      else echo "Что-то равно";
// }

// echo getMin(432,21,21);

// function multiplication(&$z,&$y){
//      $a = $x * 2;
//      $b = $y * 2;
//      echo $a ."<br>";
//      echo $b; 
// }
// $x=10;
// $y=171;

// echo multiplication($x,$y);
// echo $z;

// function factorialSum($x) {
//      if($x == 0){return 1;}

//      return $x * factorialSum($x-1);
// }

// echo factorialSum(5);
// // 17.10.19:00 конец

// 18.10.1:10 начало

// function value1($x){
//      if ($x == 0){return 0;}
//       $x = value1($x-1) .'<br>';
//      echo $x;
     
// }
// echo value1(4);

// function numbers(int $x) {
//     if ($x === 0) {
//         echo $x;
//         return;
//     }
//     numbers($x - 1);
//     echo ', ' . $x;
//  }
// echo numbers(4); 

// include __DIR__ .'/functions1.php';
// ?>


 <?php    
// $content = '<h1>Заголовок страницы</h1>';
// require __DIR__ .'/header.php';
// require __DIR__ .'/sidebar.php';  
// require __DIR__ .'/all.php';  

//18.10.03:20 end
//18.10 12:10 start

// $fruits = ['apple','orange','grape'];
// var_dump($fruits);
// $fruits[] = 'mango';//добавление элемента в массив
// var_dump($fruits) .'<br>';
// unset($fruits[1]);//удаление функции
// echo '<br>'. $fruits[2];

// $article = [
//     'title' => 'Заголовок',
//     'text' => 'текст',
//     'author' =>['firstName'=>'Фамилия',
//     'lastName' =>'Фамилия']
// ];
//18.10 12:48 конец
// var_dump($article);
//18.10 14:30 нач
//18.10 15:49 кон
?>

<!-- <html>
<head>
    <title><?= $article['title'] ?></title>
</head>
<body>
    <h1><?= $article['text'] ?></h1>
    <p><?= $article['author']['firstName'] .'<br>'?></p>
</body>
</html> -->

<?php

//18.10 17:30 начало

// $shop = ['meet' => ['chicken'=>'курица','beef'=>'говядина','pork'=>'свинина'],
// 'vegetables'=>['carrot'=>'морковь','cucumber'=>'огурец'],'beer'=>['light'=>['jhiguli','kozel'],
// 'dark'=>['kozel'=>'супер','baltika']]];
// echo $shop['meet']['chicken'].'<br>';
// echo $shop['vegetables']['carrot'] .'<br>';
// echo $shop['beer']['dark']['kozel'] .'<br>';
// $shop['beer']['dark'] =['ohota'=>'крепкая'];
// echo $shop['beer']['dark']['ohota'] .'<br>';
//18:30 конец
//19:50 начало
//20:20 конец

// $carSpeed =[
//     98,
//     110,
//     77,
//     100,
//     98,
//     100,
// ];
// $a = 0;

// foreach($carSpeed as $x){
//     $a += $x;
//     $z = $a / count($carSpeed);
   
// }
// echo $z;

// for($i=0;$i < 100;$i++){
//     echo $i;
//     echo '<br>';
//    }

//    for($i=1;$i <=50 ;$i++){
//     if($i % 2 === 0){echo $i .'<br>';}
//    }

// $randomValues =[];
// for($i=1;$i<=10; $i++){
//     $randomValues[] = mt_rand();
// }

// var_dump($randomValues);

// $line = trim(fgets('STDIN'));
// echo $line;

// echo strrev("abcdefg");//строка наоборот

// $a = 'hello world';
// list($a1,$a2)=$a;
// var_dump($a);

// echo $a2 .' ' ,$a1;

// $x = 2;
// while($x<100){
//     echo $x;
//     echo $x = $x*2;
//     echo '<br>';
// }

// $x = 345;
// while($x<=357){
//     $xMassive[] = $x++;

// }
// var_dump($xMassive);

// foreach($xMassive as $key=>$c){
//     echo $c .'<br>';}


// while (true) {
//     echo 1;
//     }

    // $array = [2, 3, 6, 1, 23, 6, 56, 7, 1, 15];
    // $number = 6;
    
    // $isNumberFound = false;
    // foreach ($array as $item) {
    //     echo 'Сравниваем с числом элемент ' . $item . '<br>';
    //     if ($item === $number) {
    //         $isNumberFound = true;
    //         break;
    //     }
    // }
    //   echo $isNumberFound ? 'Число найдено' : 'Число не найдено';

// for($i = 1;$i<=20;$i++){
//     if($i % 3 === 0){
//         continue;}
//         echo $i .'<br>' ;
        
//     }




// function findNum(array $array, int $num)
// {
//     foreach ($array as $volume) {
//         if ($volume === $num) {
//             return true;
//         }
//     }
//     return false;


// $array =[1,3,7,6,3,4,135,7,11,15,21,2,3,4];


//  function findNumber($array,$n){
//     $a = TRUE;

//     foreach($array as $key){
//         if($key == $n){    
//          return $a;
    
//         }
//          }
//          $b = 'FALSE';
//         return $b;
//  }

// $array =[1,2,3,4,5,6,7,8,9];
// foreach($array as $key){
//     if($key % 2 ==0){
//         echo $key .'<br>';
//     }
// }

// $array = [1,2,3,4,5,6,7,8,9];
// $c = 11;

// if(in_array($c,$array)){
//     echo 'есть';}
//     else {echo 'нет';
// }

// $n = (7);

// if ($n === 0) {
//     return;
// }

// if ($n === 1) {
//     echo 0;
//     return;
// }

// $fib = [0, 1];
// for($i=1; $i < $n-1; $i++) {
//     $fib[] = $fib[$i] + $fib[$i-1];
// }

// echo implode(' ', $fib);
    
// $array = [1,3,95,3,2,3,3,5,14];
// sort($array);       
// $a = implode(":",$array);
// echo $a .'<br>';


// foreach($array as $key){   //недоработанный вариант
//     echo $key .':';
// }
// echo '<br>';
// $slice = array_slice($array,3,10);
// var_dump($slice);

// $a = '0 2 3 1 2';
// echo $a;
// array_fill_keys($keys,$a);

// $line = trim(' 44 41 1 1 1 1 2 3 5');
// $nums = explode(' ', $line);

// $numsPrinted = [];
// foreach ($nums as $num) {
//     if (!isset($numsPrinted[$num])) {
//         $numsPrinted[$num] = true;
//         echo $num . ' ';
//     }
// }

// var_dump($_GET);
// echo '<br>';
// echo $_GET['param1'];


// $login = $_GET['login'] ?? '';
// $password = $_GET['password'] ?? '';

// if($login === 'admin' && $password === '12345'){
//     $result = 'Идентификация завершена';
// }
// elseif($login !== 'admin'){
//     $result = 'Логин неверный';
// }
// else{
//     $result = 'Пароль неверный' ;
//     }

// ?>


<!-- // <html>
// <head>
//     <title>Знакомство с GET</title>
// </head>
//  <body>
    
//      <?= $result ?>
//      <br>
//     <?= $password ?>
// </body>
//  </html> -->

<?php

// $line = trim('23.4.43.14.2.2'); //создается переменная удаляет пробелы из начала и конца строки
// $nums = explode('.', $line); // разбивает строку с помощью разделител и представляет в виде массива
// $max = $nums[0] * $nums[1];
// var_dump($max);

// foreach($nums as $i => $num1) { //перебирает массив нумс и записывает значение в нум1
//     foreach($nums as $j => $num2) {  //дополнительно перебирает тот же массив нумс и записывает значение в нум2 а затем их сравнивает
//         if ($i === $j) {  //сравнивает ключи если равны пропускает
//             continue;
//         }
//         $product = $num1 * $num2;  //в цикле умножает отсеенные значение(равные друг другу)
//         if ($product > $max) {
//             $max = $product;
//         }
//     }
// }
// echo $max;

// $line = trim('1 2 3 2 4 4 2 4 4 2 5');
// $nums =explode(' ',$line);
// $nums2Freq = [];
// $currentMaxFreq = 1;
// $currentMaxNum = $nums[0];
// var_dump($nums[0]);
// foreach ($nums as $num) {
//     if (!isset($nums2Freq[$num])) {
//         $nums2Freq[$num]=1;
//     } else {
//         $nums2Freq[$num]++;
//     }
//     if ($nums2Freq[$num] > $currentMaxFreq) {
//         $currentMaxFreq = $nums2Freq[$num];
//         $currentMaxNum = $num;
//     }
// }
// echo $currentMaxNum;

// $shop = ['meet' => ['chicken'=>'курица','beef'=>'говядина','pork'=>'свинина'],
// 'vegetables'=>['carrot'=>'морковь','cucumber'=>'огурец'],'beer'=>['light'=>['jhiguli','kozel'],
// 'dark'=>['kozel'=>'супер','baltika']]];
?>

<html></html>
<head>
    <title>цикл</title>
</head>
<body>
<?php 
// $shop = [
//     'meet' => ['курица','говядина','свинина'],
// 'vegetables'=> ['морковь','огурец']];


// foreach($shop as $key =>$value){
//     echo "<h1>$key </h1><br>";
//     for($i=0;$i<count($value);$i++)
//     {echo "<li>$value[$i];</li><br>";
//     }
// }
?>
</body>
</html>

<?php

// $a = [1,2,3,4,4,7,9];
// function foo($a,$c){
//     foreach($a as $key=>$z)
//         if($z === $c){return true;}
// return 'null';
// }
     

// $c = 12;
// echo foo($a,$c);

// $a = [1,2,3,3,4,7,7,7,7,7,9];
// function foo($a,$b){
//     $i = 0;
//   foreach($a as $key){
//     if($key === $b){
//         $i++;
//     }
   
//   }
//   return $i;
// }
// $b =7;
// echo foo($a,$b);

// function foo($a,$b){
// $c = 0;
//     for($i=0;$i<count($a);$i++){
//         if($a[$i] === $b){
//         $c += 1;
        
//         }
//         }
//         echo $c;
//     }
    

// $b =3;
// echo foo($a,$b);


// $speed = [78,43,35];
// $sumOfSpeed = 0;
// foreach($speed as $key){
//     $sumOfSpeed += 1;
   
// }
// echo $sumOfSpeed;

// $a = [1,2,3,3,4,7,7,8,7,7,7,9];

// foreach($a as $key){
//     if($key % 2 === 0){
//         echo $key;
//     }
// }

// $a = 6;
// for($i=0;$i<=$a;$i++){
//     $i1 = 

//     echo $z . '<br>';
// }

// $array = ['login' => 'admin'];

// if(array_key_exists('password',$array)){ //Проверяет, присутствует ли в массиве указанный ключ или индекс
//     echo $array['password'];
// }
// else{echo 'element not found';}

// $array['password'] = '12345';

// var_dump($array);

// if(array_key_exists('password',$array)){
//     echo $array['password'];}

// $array = [1,3,2];
// sort($array);
// echo implode(':',$array);


// $array = '0 2 3 1 2';
// $arr1 = str_split($array);
// $arr2 = (array_unique($arr1));
// sort($arr2);
// echo implode(' ',$arr2);



