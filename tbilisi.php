<?php

// echo "Hello world" ;
// $a = 1.4;
// $b = 2;
// $c = "hello";
// var_dump($a + $b);
// var_dump($c)

// $meshok = ['telephone' => 'samsung' ,'koshelek' => 100];
// // var_dump($meshok);
// echo($meshok['koshelek']);
// $s = 3;
// if($s < 5){echo 'Hello';}
    // elseif($s != 5){echo 'no 5';}

// $a = 1;
// $d = $a === 1 ? 'YES' : 'NO';
// var_dump($d); // тернарный оператор

// $language = 'php';
// $str = 'I love ';
// $final = "I drink beer and   {$str}  {$language}";
// var_dump($final);      // конкатенация

// $z = <<<HEREDOC
// egrege
// egerg        
// ererg
// HEREDOC ;
// echo $z;//HEREDEOC

// $s = `dir` ; //выполнение консольных команд
// echo $s;

// $i = 1;
// while($i < 4){
//     echo $i;
//     $i++; }

// echo 2 . '<br>' ;
// echo 3 . '<br>' ; //перенос строки

// for($i=0; $i < 5; $i++){
//     echo 'Hello'.'<br>';
// };

// $computer = 
//     ['processor' => 'intel',
//     'videocard' => 'nvidea',
//     'cd' => 'dvd']            
// ;

// foreach ($computer as $key=>$value){
//     $key.='vasya';   //приращение?
//     echo($key).'<br>';
// echo($value).'<br>';
// };                       

// for($i = 0;$i < count($computer);$i++);
// var_dump($computer);


// function x($number=15,$number2=10){
//     echo 1+$number .'<br>';
//     echo 3+$number2 .'<br>';
// }

// x(20,144) ;

// $c = 9;
// $x = func($c);
// echo $x;

// function func($name){
//     $name++;
//     return $name;
// }

// function func($arg)  {
//     $result = 0;
//     for($i = 0; $i < $arg; $i++) {
//       $result = $result + $i;
//     }
//     return $result;
//   }
//   echo func(5);



// function sum($a,$b,$c){
//     $z = ($a+$b+$c)/2;
//     return $z;
// }
// $z = sum(2,5,1);
// echo $z;

// function myName($name){
//     $c = "Добро пожаловать, " .$name;
    
//     return $c;
// }
// $i = myName('jktu');
// echo $i;

// function myGreater($a,$b,$c){
//     if ($a > $b && $a > $c){return $a;}
//     elseif($b > $a && $b > $c){return $b;}
//     elseif($c > $a && $c > $b){return $c;}
//      else{return 'LOX';}      //выбирает самое большое число
//     }

// $f = myGreater(2,4,4);
// echo $f

// $glob = 'Masha';

// function hello($str){
//     global $glob;
//     echo $str .' ' . $glob .'<br>';
// }

// $hello = 'Привет';
// $hello1 = 'Здравствуй';

// hello($hello)  ;
// hello($hello1);

// $glob = 'Олег';

// $hello = function($str) use ($glob){
//     echo $str .' ' . $glob .'<br>';
// };

// $a1 = 'Привет';
// $a2 = 'Здравствуй';

// $hello($a1);
// $hello($a2);


// function reName1($newname,&$inname){
//     $inname = $newname;
//     echo $inname;
// }

// $name = 'Masha';
// reName1('Olga', $name);
// echo '<br>'.$name;

// $_GET['jjjj']='xxx';
// function &reMake($str){
//     $_GET['jjjj'] = $str;
//     return $_GET['jjjj'];
// }
// $new = &reMake('NEW');
// var_dump($new);
// $new = '2222';
// var_dump($new);
// var_dump($_GET['jjjj']);


// function userConnect($d){
//     return function($user) use ($d){
//         echo $user . ' подключился' .$d .'<br>';
//     };
// };
// $d = userConnect(' к New base');
// $d('Masha');
// $d('Gosha');       //функция замыкания

// var_dump($_GET);

function getSum($x,$a){
  return $x + $a;
}

echo getSum(3,4);

?>





