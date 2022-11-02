<?php

function checkAuth($login,$password){
    $users = require __DIR__ . "/newFile.php";


foreach($users as $user){
    if($user['login'] === $login && $user['password'] === $password ){
        return true;
    }
}
return false;
}

function getUserLogin(): ?string
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromcookie = $_COOKIE['password'] ?? '';

    if(checkAuth($loginFromCookie,$passwordFromcookie)){
        return $loginFromCookie;
    }
    return null;
}

