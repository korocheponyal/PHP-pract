<?php
//тернарный оператор
$var1 = 'slovo';
$var2 = 3;
$var3 = 'ruslan';
echo $var1 ? $var2 : $var3;// если вар1 тру то выводимвар2 иначе вар3
echo $var1 ? $var1 : $var3;
$variable = 'ruslan';
$variable = $variable ?: 7;
// echo $variable;

// $array = [[0 => "apple"],["banana" => "bananna"]];//двумерный массив
// echo $array[1]["banana"];
// for ($i = 0; $i < count($array); $i++) {
//     for ($j = 0; $j < count; $j++){
//         echo "$j<br>";
        // echo @$array[$i][$j];
        // echo '<br>' .d(@$array[$i][$j]);
      
function d($v){
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
    }
$i = 0;
switch ($i) {
    case 0:
        echo 0;
        break;
    case 1:
        echo 5;
break;
}
// crud