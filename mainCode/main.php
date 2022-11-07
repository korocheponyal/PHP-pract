<?php


// $i=0;
// do {
//    $i++;
//     echo 'ruslan';
// }while ($i<5);

// switch(2){
//     case 1 :
//         echo 'это единица';
//         break;
//     case 2 : 
//         echo 'это не единица';
//         break;
// }

// $i = 0;
// xx: 
// $i++;
// echo $i;
// if($i>=10) goto finish;
// goto xx;
// finish:

// $array = [
//     'name'=>'ruslan',
//     'age'=>'100'
// ];

// foreach($array as $key=>$value){
//     echo $key .'-' . $value .'<br>';
// }

// $array2[] = 'test';
// $array2[] = 'test2';

// var_dump($array2);


// $name = $list[0];
// $age = $list[1];

// list($name,$age) = $list;

// $info = array('кофе', 'коричневый', 'кофеин','кофеин2');

// // Составить список всех переменных
// list($drink, $color, $power,$x) = $info;
// echo "$drink - $color, а $power делает его $x особенным.\n";


// define('ANIMALS', 
// [1=>['name'=>'ruslan'],
// '2',
// '3']
//     );

// $numbers = [101,102,103];
// foreach($numbers as &$value )$value++;
// $array = ["a"=>1,"b"=>2];
// $ser = serialize($array);
// $unserialize = unserialize($ser);
// echo $ser;
// var_dump($unserialize);
?>



    <?php 
    


    // function selectItem($items,$selected = 0){
    //     $text = "";
    //     var_dump($items);
    //     foreach($items as $key=>$value){
    //         if ($key == $selected){
    //             $select = ' selected';

    //         } else {
    //             $select = "";
    //             $text .= "<option$select value='$key'>$value</option>\n";
    //         }
    //     }
    //     return $text;
    // }
    // $items = [0=>'vasya',2=>'100'];
    // selectItem($items,0);
    // var_dump($text);

    ?>
</body>
</html>


<?php
// $host = 'localhost';
// $db = 'crud';
// $user = 'root';
// $pass = '';

// try{
//     $db_coonect = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
// } catch (\PDOException $error) {
//     throw new \PDOException($error->getMessage(), (int)$error->getCode());
// }

// $dbquery = $db_coonect->prepare('SELECT * from `regions`');
// // var_dump($dbquery);
// $dbquery->execute();
// $result = $dbquery->fetchAll(PDO::FETCH_ASSOC);




// echo '<select>';
// foreach($result as $key=>$value){
//     echo "<option>" . $value['name'] . "</option>";
    
// }
// echo '</select>';

// var_dump($value['name']);


// $x = 5;
// $y = 10;

// function myTest() {
//     global $x, $y;
//     $y = $x + $y;
// }

// myTest();  // функция запуска
// echo $y; // выводит новое значение переменной $y
// //статическая переменная 
// function count1(){
//     $count = 0;
//     $count++;
//     echo $count;
// }

// count1();
// count1();

//факториал 20 число фибаначи и рекурсия 
//функция обр вызова 3 1 2 6 12 


// function factorial($n){
//     if ($n == 0) { 
//     return 1;
//     } else { 
//         return $n * factorial($n-1);
//     }
// }

// echo factorial(5);


// Fn=(Fn-1)+(Fn-2);

function fib($n){
    if($n < 3){
    return 1;
    }else{
        
        return fib($n-1)+fib($n-2);
        
    }
    
}


// for($n=1;$n<10;$n++){
    echo fib(7) . '<br>';
// }



