<?php

    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!

    if (isset($_POST['login'])) { 

        $login = $_POST['login']; 

    if ($login == '') {
        unset($login);
    }
} 

//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную

if (isset($_POST['password'])) {
        $password=$_POST['password'];

    if ($password =='') {
        unset($password);
    } 
}

//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести

$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы

$login = trim($login);
$password = trim($password);
//echo var_dump($password);
//echo var_dump($login);
require "boot.php";
//$db = DB::connect();
$stmt = $db->prepare('SELECT id, login, password_md5 FROM users_accounts WHERE login= ?');
$stmt->execute([$login]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

//echo var_dump($password);

//$myrow = mysql_fetch_array($result);
if (empty($result['password_md5']))
{
    //если пользователя с введенным логином не существует

    exit ("Извините#1, введённый вами login или пароль неверный.");
} else {
    //если существует, то сверяем пароли
    if ($result['password_md5']==$password) {

        //если пароли совпадают, то записываем в сессию этого пользователя! Можете его поздравить, он вошел!

        $_SESSION['login']=$result['login']; 
        $_SESSION['id']=null;
        //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        //var_dump($_SESSION);
        echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    } else {

        //если пароли не сошлись

        exit ("Извините#2, введённый вами login или пароль неверный.");
    }
}

?>