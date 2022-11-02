<?php

// $login = !empty($_GET['login']=='admin') ? $_GET['login'] : 'логин не введен';
// login = !empty($_GET['login']) ? $_GET['login'] : 'логин не введен';
// $password = !empty($_GET['password']) ? $_GET['password'] : 'логин не введен';

?>


 <html>
<head>
    <title>Введите логин!</title>
</head>
<body>
    <form action="http://127.0.0.1:5500//project/newLife.php" method="get">
        <input type text="login" name="login">
        <input type text="password" name="password">
        <input type="submit" value="Погнали">
    </form>
</body>

</html>

