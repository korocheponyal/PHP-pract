<?php
include "lesson2.php";
// ПОДПИСЫВАЙТЕСЬ НА МОЙ ЮТУБ КАНАЛ youtube.com/SENATOROV
// ПОДПИСЫВАЙТЕСЬ НА МОЙ ЮТУБ КАНАЛ youtube.com/SENATOROV
// ПОДПИСЫВАЙТЕСЬ НА МОЙ ЮТУБ КАНАЛ youtube.com/SENATOROV
$post = (!empty($_POST)) ? true : false;
d($_POST);
if($post)
{
$email = trim($_POST['email']);
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$tel = htmlspecialchars($_POST["tel"]);
$error = '';

if(!$name)
{
$error .= 'Пожалуйста введите ваше имя<br />';
}

// Проверка телефона
function ValidateTel($valueTel)
{
$regexTel = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$email)
{
$error .= "Пожалуйста введите email<br />";
}
if($email && !ValidateTel($email))
{
$error .= "Введите корректный email<br />";
}
if(!$error)

// (length)
if(!$message || strlen($message) < 1)
{
$error .= "Введите ваше сообщение<br />";
}
if(!$error)
{


$name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

$subject ="Новая заявка с сайта domain.name";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
/*
$message ="\n\nСообщение: ".$message."\n\nИмя: " .$name."\n\nТелефон: ".$tel."\n\n";
*/
$message1 ="\n\nИмя: ".$name."\n\nТелефон: " .$tel."\n\nE-mail: " .$email."\n\nСообщение: ".$message."\n\n";	


$header = "Content-Type: text/plain; charset=utf-8\n";

$header .= "From: Новая заявка <example@gmail.com>\n\n";	
$mail = mail("tetow33111@exoacre.com", $subject1, iconv ('utf-8',  $message1), iconv ('utf-8', 'windows-1251', $header));

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}



// $number = 10;
// if ($number<10){
// echo 'number<10';
// }else{
//     echo 'number>10';
// }

?>

<style>
    body {
        background:#3333;
    }
</style>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Заголовок</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<body>
	<footer>
		<h2>Контактная форма</h2>
		<div class="form-container">
			<div class="note"></div>
			<div class="fields">
				<form method="POST" class="ajax-contact-form" action="/project/lesson3.php">
					<p><input type="text" name="name" value="" placeholder="Имя"></p>
					<div class="row">
						<div class="col"><input type="tel" name="tel" value="" placeholder="Телефон"></div>
						<div class="col"><input type="email" name="email" value="" placeholder="E-mail"></div>
						</div>
					<label>Текст</label>
					<textarea name="message" cols="40" rows="3"></textarea>
					<input type="submit" name="submit" class="form-container__btn" value="Отправить">
				</form>
			</div>
		</div>
	</footer>
    <!-- <script>
    jQuery(document).ready(function($) {

$(".ajax-contact-form1").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "/lesson3.php",
data: str,
success: function(msg) {
if(msg == 'OK') {
result = '<p>Ваш заказ принят</p>';
$(".fields").hide();
} else {
result = msg;
}
$('.note').html(result);
}
});
return false;
});
});
</script> -->
	<script src="contactform.js"></script>
</body>

</html>