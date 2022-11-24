<?php require 'ajax_response.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  id="calculator" method="POST">
        <input type="number" name="firstnumber">
    <select name="option">
        <option value="+">plus</option>
        <option value="-">minus</option>
    </select>
        <input type="number" name="secondnumber">
        <input type="submit"  value="SEND">
</form>
<div id="result"></div>
<footer>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="Ajax_Js.js"></script>
</footer>
</body>
</html>



