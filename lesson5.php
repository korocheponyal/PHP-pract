<?php
function d($v){
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
    }
echo 'hello world<br>'; 

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r("$greeting .  . $firstName . !");

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r("{$greeting}, {$firstName}!");

d(@$_POST['get_key']);// @- откл предупреждений


?>
<?php if(isset($_POST["get_key"])): ?>
<!-- <form method="POST" action="">
    <input type="submit" name="get_key" value="GO">
     
</form> -->существует
<?php else: ?>
<form method="POST" action="">
    <input type="submit" name="get_key" value="GO">
     
</form>
<?php endif; ?>

<?php if(isset($_POST["get_key"])) {?>
<!-- <form method="POST" action="">
    <input type="submit" name="get_key" value="GO">
     
</form> -->существует
<?php } else {?>
<form method="POST" action="">
    <input type="submit" name="get_key" value="GO">
     
</form>
<?php } 
$var1[]=10;
$var1[]=20;
 d($var1);
  
 if(!true) echo "true";
 else echo (int) false;
 $n=0;
 while ($n<5) {
    echo "ruslan";
    // $n++;
    $n+=1;
 }
$i = 0;
do {
    echo $i;
} while ($i > 0);
for ($i=0, $key=10; $i<20, $key<20; $i++, $key++) { 
    echo "$i, $key<br>";
}

