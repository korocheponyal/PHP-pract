<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РЕКЛАМА</title>
    <style>
    #advers{width: 600px;
    } 
    </style>
</head>
<body>

<?php 

if(!isset($_POST["cookie1"])) :  ?>
<form action="http://127.0.0.1:5500/project/advertising.php" method="post" >
<input type="submit" name="cookie1"  value="Закрыть рекламу" >
<img id="advers" src="pick.gif" alt="реклама" >
</form>
<?php  else : ?>
<p>все хорошо</p>
<?php endif; ?>

</body>
</html>

<?php 

if(isset($_POST["cookie1"])){
    setcookie('reklama','popup',time() + (86400 * 30),'/')
}


//при клике на картинку вызывается метод куки c помощью
//  изучить psr
