<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method='post'>
    <select onchange='this.form.submit()' name="select[]" id="" multiple >
        <option value="first">first</option>
        <option value="second" selected>second</option>
        <option value="thirth">thirth</option>
    </select>
<input type="text">
</form>
</body>
</html>

<?php

var_dump($_POST['select'][0]);
