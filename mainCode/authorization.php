<?php

function checkAuth(string $login,string $password){
    $users = require __DIR__ . '/userDB.php';

    foreach($users as $user){
        if($user['login'] === $login && $user['password'] === $password){
            return true;

        }
    }
    return false;
}

function getUserLogin() : ?string {
    $loginFromCookie = $_COOKIE['login'] ?? ''; //если ключа нет  присвоет пустоту
    $passwordFromCookie = $_COOKIE['password'] ?? '';

    if(checkAuth($loginFromCookie,$passwordFromCookie)){
        return $loginFromCookie;
    }

    return null;
}




