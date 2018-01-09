<?php

session_start();

$dsn = 'mysql:dbname=skillogram710;host:localhost';
$user = 'root';
$password = 'root';


$dbh = new PDO ($dsn, $user, $password);

$salt = 'wefewfe435wfrewvdewfewfew';



if (isset($_GET['login']) && isset($_GET['password']) && isset ($_GET['type'])) {
    if ($_GET['type'] === 'new') {
        $stmt = $dbh->prepare('INSERT INTO users (login, password) '
                .'VALUES (:login, :password)');
        $stmt->execute ([
                'login' => $_GET['login'],
                'password' => md5($_GET['password']. $salt),
                ]);
                addMessage('Регистроация прошла успешно')
    }
    if ($_GET['type'] === 'auth') {
        $stmt = $dbh->prepare('SELECT id, login, password FROM users WHERE login = ?');
        $stmt->execute([$_GET['login']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        varp_dump($user);
        
        if ($user && $user['password'] === md5 ($_GET['password'].$salt)) {
            $_SESSION['user_id'] = $user['id'];
            addMessage('Вход в приложение')
            
        }
    }
}

if (isset($_SESSION['user_id'])) {
    echo 'Авторизован пользователь с id = ' .$_SESSION 
    echo "<br>";

}
