<?php
require __DIR__ . '/authorization.php';
$login = getUserLogin();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>
<body>
<?php if($login !== null): ?>
Добро пожаловать  <?= $login ?>
<?php else: ?>
    <a href="login_window.php">авторизуйтесь</a>
<?php endif; ?>
</body>
</html>