<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<head>
    <title> The Culinary Council</title>
    <link href="styles.css" rel="stylesheet" type="text/css"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <?php 
    require "boot.php";
    ?>
</head>
<body>
        <div class="header-logo">    
        <a href="index.php"><img src="images/logo2.jpg" alt="Домой" height=130 width=510> 
    </div>
    <div class="header-menu"><br/>
        <?php if ($_SESSION['login']!=true) {?>
            <a href="auth.php">Войти</a>
            <a href="registration.php">Регистрация</a>
        <?php } else { ?>
            <a href="logout.php">Выйти</a>
        <?php } ?>
        <?php if ($_SESSION['login']==true) {?> 
            <a href="index.php">Лента</a>
            <a href="add_post.php">Добавить запись</a>
            <a href="about.php">О проекте</a>           
            <a href="press.php">Пресса</a>
        <?php } else { ?>
            <a href="about.php">О проекте</a>           
            <a href="press.php">Пресса</a>
        <?php } ?>
            <br/><br/>
            <form class="form" method="GET"> 
            <input class="field" type="text" name="search"><input class="button" type="submit" value="OK">
        </form>
    </div>
    <table width="100%">
        <tr>    
            <td><a href="index.php"><img src="images/button_comment.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_add.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_view.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_grasp.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_edit.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_add.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_view.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_edit.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_view.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_view.jpg" alt="Фото01"></a></td>
            <td><a href="index.php"><img src="images/button_add.jpg" alt="Фото01"></a></td>
        </tr>
    </table>    
    <table width="100%">
        <tr>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "";
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
    }
    ?>
    </body>
    </html>
            <?php
            require ("posts.php");
            ?>
        </tr>
        <br/><br/><br/>
    </table>
            <?php
            require ("footer.php");
            ?>
</body>
</html>