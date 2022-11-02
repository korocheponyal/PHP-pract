<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" id="list" method="post">
    <select name="month" id="">
        <option value="">Выберите месяц</option>
        <option value="1" <?php if($_COOKIE['month'] == 1) echo 'selected';?>>August</option>
        <option value="2" <?php if($_COOKIE['month'] == 2) echo 'selected';?>>November</option>
        <option value="3" <?php if($_COOKIE['month'] == 3) echo 'selected';?>>October</option>

    </select> 
    
<input type="submit" name="submit" value="Отправить">
</form>

    
</body>
</html>

<?php

function e($error){
    echo '<pre>';
    var_dump($error);
    echo '</pre>';
}
e($_REQUEST);

if ($_POST['month']){
    setcookie('month',$_POST['month']);
}