<?php

session_start();

$users = [
    
    'admin' => 'password1',];

if (isset($_GET['login']) && isset($_GET['password'])) {
    

if (isset($users[$_GET['login']]) && $users[$_GET['login']] === $_GET['password']) }{
        
        echo 'Вошли';
        
    } else {
    
    echo 'Логин или пароль не верный';
}