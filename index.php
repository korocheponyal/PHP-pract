<?php
echo PHP_INT_MAX;
$name = 'ruslan';
echo $name;
$doroshkov = 'doroshkov';
$array = ['ruslan' => 26, 
'second_name' => $doroshkov];
echo '<pre>';
$bool = true;
print $bool;
print_r($bool);
echo $bool;
var_dump($array);
echo '</pre>';
unset($doroshkov);// удаляет переменную
// типв данных null - ничего
if (isset($doroshkov)){ 
    //
} else {
    echo 'no';
}
echo '<br>'.is_string($name);
$x = settype($name, 'int');
var_dump((unset)$x); // позволяет досконально посмотреть тип переменной
$a = 10; // ссылка на объект
$b =& $a; //жесткая ссылка
$b = 0;
echo 'a='.$a;
$var_1 = 'red';
$color = 'var_1';
$$color = 'ruslan';
echo $$color; // символическая ссылка 
echo $var_1; 
// void - тип данных, функция ничего не возвращает
// mixed - тип данных, все что угодно
// callback - обозначает передавамую внутрь другую функцию
// resource - доступ к внешним объектам возвр дескриптор откр файлы 
// object - объект
echo __FILE__;  
define('RUSLAN', $name);
const test = 12;
echo RUSLAN;
echo test;
// const test = 13;
// логические операторы 
// ! - не, || - или,&& - и,===  - это сравнение величин и типов
// and - никзоприоритетная и ,or - низкприор или,xor - это искл или
// <> не равно, != - не ровно , !== - не тождественно
echo "<hr>";
var_dump(4 == '4');// отладачная функция
echo 'privet'.$color;
echo "{$color}molodec";
$var1 = 10;
// инкремент
$var2 = ++$var1;//$var1 += 1,$var1 = $var1+1 
// деркремент
$var2 = --$var1;//$var1 == 1,$var1 = $var1+1
//  

$c = "лох";
$b = 10;
var_dump($c);
var_dump($b);

