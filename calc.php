<?php


if (empty($_GET['x1']) && empty($_GET['x2'])){
    return 'ничего не передано';

}
if ($_GET['x1']===''){
    return 'не передано 1 значение';
}
if ($_GET['x2'] === ''){
    return 'не передано 2 значение';
}

if ($_GET['x2'] === '0' && $_GET['operation'] === '/'){
    return 'на ноль делить нельзя';
}

if ($_GET['x1'] === '0' && $_GET['operation'] === '/'){
    return 'ноль делить нельзя';
}
if (!is_numeric($_GET['x1']) || !is_numeric($_GET['x2'])) {
    return 'Нельзя вводить строковые значения';
}
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
$operation = $_GET['operation'];
$x1 = (float)$x1;
$x2 = (float)$x2;

$expression = $x1 . ' ' . $operation . ' ' . $x2 . ' = ';

switch ($operation){
    case '+';
    $result = $x1 + $x2;
    break;

    case '-';
    $result = $x1 - $x2;
    break;

    case '*';
    $result = $x1 * $x2;
    break;

    case '/';
    $result = $x1 / $x2;
    break;
default:
    return 'операция не поддерживается';
}

return $expression . $result;