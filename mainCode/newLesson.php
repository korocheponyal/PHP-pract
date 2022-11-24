<?php

// $a = ['a'=> 1,'b'=>'user'];
// $b = ['b'=> 'random'];
// $a+=$b;
// print_r($a);

// foreach($b as $k=>$v) {
//     $a[$k]=$v;
//     var_dump($a);
// }

// $arrayName = ['oleg','vasya','petruha'];

// for($i=0;$i<count($arrayName);$i++){
//     echo $arrayName[$i] .'<br>';
// }

// for(end($arrayName);($k=key($arrayName));prev($arrayName)){
//     echo $arrayName[$k] .'<br>';
// }



// for(reset($arrayName);($k=key($arrayName)) !== false;next($arrayName)){
//     echo $arrayName[$k] .'<br>';
// }

// function increment(&$a){
//     echo $a . '<br>';
//     $a++;
//     echo $a . '<br>';
    
// }

// $num = 5 ;
// echo $num . '<br>';
// increment($num) . '<br>';
// echo $num . '<br>'; 

// $a = 20;
// $b = &$a;
// echo "$a</br>"; //выведет 20 </br> - это тег перевода на новую строку
// $b = 50;
// echo "$a"; //выведет 50

//аякс 
//локальные и глоб переменные +
//вложенные функции и фу-ии обрат вызова 
//эм-ия функции виртуал аннонимный функции.



// function foo(){
//     function foo2(){
//         print_r('lox');    //вложенная функция
//     }
//     foo2();
// }

// foo();

// $a = [1,3,4,6];
// function foo(...$a){
//     function foo2(){
//                         //передача массива функции
//     }
//     foo2();
//     print_r($a);
// }
// $a = [1,3,4,6];
// foo(...$a);


// anonymus function

// $myEcho = function (...$str){
//     foreach($str as $v){
//         echo $v;
//     }
// };

// $myEcho('test','test1');



//передача функций по ссылке

// function color($i){
//     echo 'call_color';
// }

// function car($i){
//     echo 'вызвана функция кар';
// }

// $f = "color";

// // $f(3);

// call_user_func($f,3);

//функция замыкания 

// $message = 'work24';
// $func_anonyme = function(array $error) use ($message){
//     if (isset($error) && count($error) > 0){
//         echo "$message  '<br>' ";
//         foreach($error as $err){
//          echo "$err  '<br>'";
//         }
//     }
// };

// $func_anonyme([]);
// $error[] = 'write name user';
// $func_anonyme($error);

// $message = 'text';
// $error = ['PHP','MYSQL'];

// $func_anonyme($error);

// function userConnect($db){
//     return function($user) use ($db){
//         echo $user . ' подключился к базе ' . $db .'<br>';
//     };
// }


// $db = userConnect('New base');
// $db('Masha');
// $db('Serega');
// $c = 'какой-то ';
// $db($c);


// возврат ссылки

// $numb = 88;
// function &magic(){
//     global $numb;
//     return $numb;
// }

// $newNumb =& magic();
// $newNumb = 0;

// echo $numb;

//сравнение скорости 

// function takeVal($x){$y = $x[1234];}
// function takeValRef(&$x){$y = &$x[1234];}
// function takeValMod($x){$y = $x[1234]++;}
// // function takeValModRef(&$x){$y = &$x[1234]++;}

// test("takeVal");
// test("takeValRef");
// test("takeValMod");
// test("takeValModRef");

// function test($func){
//     $array = [];
//     for($i=1;$i<=100000;$i++) $array[$i] = $i;
//     for($t = time();$t==time(););
//     for($n = 0,$t = time();time() == $t;$n++) $func($array);
//     printf("<tt>$func<tt> took %d itr/sec <br>",$n);

// }

//callback ,генераторы,делегирование генераторов
// посмотреть строчные функции


// function userConnect($db,$user,$callback){
// $c = $user . ' подключился к ' . $db .'<br>';
// $callback($c);
// }


// userConnect('NewBase','Masha',function($answer){
//     echo 'URA ' . $answer;
// });

// function HelloWorld(){
//     echo 'Hello world';
// }

// function callBack($callback){
//     if(is_callable($callback)){
//         $callback();
//     }
   
// }

// callBack("HelloWorld");//функция обр вызова

// $data = "дата";
// $x = "test";

// $f = function($x) use ($data){
//     echo 'Здравствуйте';
//     echo $data;
//     echo $x;
// };

// $x = 'testhhh';
// $data = 'fsdfsdf';
// call_user_func($f,$x);//standart callback function



// function simple($from = 0,$to = 100){
//     for($i = $from;$i<$to;$i++){
//         echo "value - $i <br>";
//         yield $i;
        
//     }
// }


// foreach(simple(0,5) as $v){
//     echo $v*$v;
    // if($v>5){
    //     break;
    // }
// }

// function generator(){
//     yield 1;
// }

// foreach(generator() as $i){
//     echo $i;
// }

// function callAction($array,$callback){
//     foreach($array as $v){
//         yield $callback($v);
//     }
// }

// $array = [1,2,3,4,5];

// $call_act = callAction($array,function($e){return $e*$e;});

// foreach($call_act as $v){
//     echo $v;
// }

//кодировка ascii

// for($code = 32;$code < 128;$code++){
//     echo $code . ' ' . chr($code) . '<br>';
// }

// echo "\u{0410}";
// echo "&quot;";

// $str = "Hello WORLD";
// echo substr($str,0,5);//работа с подстрокой
// echo str_replace("WORLD", "мир",$str);

// function transliter($str){
//     $str = strtr($str,
//     "абв",
//     "abv"
//      );
//      $str = strtr($str,array(
//     "e" => "yo",
//     "ц" => "ts"
//      ));
//      return $str;
// }

// echo transliter("ц");

// function transliterate($string){
//     $pattern = ["а","б","в"];
//     $replace = ["a","b","v"];
//     return str_replace($pattern,$replace,$string);
// }

// echobr transliterate("ехал грека корабли лавировали");

// $text = "ехал грека корабли лавировали";
// $repl = ["ехал" => "ты","ты" =>"ехал"];
// echo "str_replace() " . str_replace(array_keys($repl),array_values($repl),$text);
// echo "<br> strtr()" . strtr($text,$repl);

// что такое преобр символов юрл ин код
//многострочный коммент
//функцияхтмл специалчардз
//изменение регистрата ,установка локали,ф-я форматных пребразований
//пак ф-я,хэш ф-я мд5
//сброс буфера вывода


/* htmlspecialchars — Преобразует специальные символы в HTML-сущности
"http://127.0.0.1:5500//project/python/mainCode/testChars.php"
 strtoupper() Преобразует строку в верхний регист
  strtolower() strtolower — Преобразует строку в нижний регистр
  ucfirst() 
 setlocale — Устанавливает настройки локали
 */


