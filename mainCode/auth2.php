<?php

function auth($login,$password){
    require __DIR__ . '/userDB1.php';
    if(empty($_POST)){
        foreach($baza as $users){
            if($users['login'] == $login && $users['password'] == $password)
            {echo 'zbs';} 
        }
    }
    return 'lox';
}

auth('user1','12345');