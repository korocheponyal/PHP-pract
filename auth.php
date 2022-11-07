<?php

function checkAuth(string $login,string $password)
{
    $users=require __DIR__ . '/userDB.php';
    foreach($users as $user){
        if(['login']=== $login && ['password']=== $password){
            return true;
        }
    }
    return false;
}