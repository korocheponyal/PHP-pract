<?php
// if($_REQUEST['login']=='root' && $_REQUEST['password']=='12345'){
//     echo "Идентификация успешна";
// }
// else {echo "Что-то не так";}

function e($error){
    echo '<pre>';
    var_dump($error);
    echo '</pre>';
}
// e($_GET);
// $count = 0;
// $name_cookie = 'Ruslan';
// $site = 'youtube.com/Senatorov';
// setcookie($name_cookie,$site,time() + (86400 * 30),'/');
// e($_COOKIE);


?>


    
    

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //  echo (bool) $_REQUEST['login'] ;
    // if(empty($_REQUEST['login'])): ?>
<div>Данные пустые</div>
<?php // else: ?>
<form method="POST" action="http://127.0.0.1:5500//project/senatorov.php" >
    login:<input type="text" name="login" value=""><br>
    password:<input type="password" name="password" value=""><br>
    <input type="submit" value="Let's go">
    
</form>
<?php //endif; ?>
</body>
</html> -->
<form><input type="submit" name="cookie" value="12345"><br></form>

<?php

if(!$_GET["cookie"]){
echo "нажмите кнопку кука не установлена";
}else{
setcookie('$name_cookie','$site',time() + (86400 * 30),'/');
}

if(@$_COOKIE['$name_cookie']){
    echo 'кука существует';
} else {
    echo "youtube.com/Senatorov";
}



//СОздать поп ап уведомление при нажатия крестика оно сохраняет и уходит
// посмотреть уроки crud

