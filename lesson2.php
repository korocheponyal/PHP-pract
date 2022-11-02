<?php
// echo !(2+2) == (2+2);
$array_old = array('key'=> 'door',1 => 5);
// var_dump($array_old);

$x = 9;
// if (++$x==10) echo $x;

function check_value($a,$b){
    if ($a == $b) return 0;
    if ($a <=> $b) return 1;//оператор возвр -1,0 или 1если а<=>b
}
// var_dump('<br>'.check_value(1,2));

function get_time($time){
    return $time;

}
// echo get_time(date('h:i:s'));
function d($v){
echo '<pre>';
var_dump($v);
echo '</pre>';
}
// d($_POST)
// d($_REQUEST) суперглобальный массив обрабатывает пост и гет запрос and cookie
?>


<!-- изучить что такое суперглобальный массив и как данные передаются на сервер,особенности оператора @ -->

