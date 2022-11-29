<?php

if(!empty($_POST)){
    require __DIR__ . '/authorization.php'; 
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: fish_authorization.php');

    }
    else {
        $error = 'ошибка';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
<?php if(isset($error)): ?>
<span><?= $error ?><span>
<?php endif; ?>
    <form action="login_window.php" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" value="войти">
    </form>
</body>
</html>