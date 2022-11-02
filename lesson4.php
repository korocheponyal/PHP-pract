<?php
function d($v){
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
    }
echo 'hello world';
//тернарный оператор
$var_1 = 0;
$var_2 = 'ruslan';
$var_3 = 0;
echo $var_1 ? $var_2 : $var_3;//Если вар1 тру,вывести вар 2 иначе вар3
// $x = null;
// $x = $x ? : 1;
// echo $x;
// $x = 1;
// $z = 3;
// d($x ?? $y ?? $z );//??выводит переменную не равную нул


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
d($_SERVER['QUERY_STRING']);
?>
 <form method='POST' action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
    <input type="text" name='LOGIN' value=''><br> 
    <input type="password" name='password' value=''><br> 
    <input type="checkbox" name='array[get_key]' value='my_value'><br>
    <input type="checkbox" name='array4[get_key2]' value='my_value2'><br>
    <button type="submit">GO</button>
    <!-- атрибут нейм содержит ключ -->
    <select name="key[]" id="" multiple>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
 </select>
 </form>
 
 <?php
 foreach ($_POST as  $value) {
   d($value);
   foreach ($value as $key => $value1) {
    d($value1);
   }
    // echo $key;
    
 }
if($_POST['LOGIN'] == 'root' && $_POST['password'] == 'qwerty' ){
    // echo "WELCOME {$_POST['LOGIN']}";
    // echo "WELCOME $_POST['LOGIN']";
    echo 'WELCOME '.$_POST["LOGIN"];
    system("rundll32.exe user32.dll,LockWorkStation");

} else {
    echo 'block';
    echo $_SERVER['REMOTE_ADDR'];
    setcookie('SENATOROV', 'YOUTUBE.com/Senatorov');
    echo $_COOKIE['SENATOROV'];
    d($_REQUEST);
    // d($GLOBALS);
}


 ?>
</body>
</html>