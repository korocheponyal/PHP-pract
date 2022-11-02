<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="/project/setCookie/assets/css/styles.css">
    <script src="/project/setCookie/assets/js/cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" ></script>
</head>
<body>
<div id="age-verify">
<div class="window">
  <span class="title">Are you over 18?</span>
  <span>To visit our website, you must be of legal drinking age.</span>
  <button class="yes" onclick="overAge()">Yes</button>
  <button class="no" onclick="underAge()">No</button>
  <div class="underBox">
    <span class="title">Sorry!</span>
    <span>You need to be at least 18 to visit our website.</span>
    <button class="back" onclick="goBack()">Go Back</button>
  </div>
<span>
</div>
</div>
    
</body>
</html>

<?php 

 if($_COOKIE['Ruslan']){
  echo 'i see cookie';
}
