<html>
    <head>
    	<title>The Culinary Council - Registration form</title>
    </head>
    <body>
<?php

require ('header.php');
require ('database_connect.php');
include_once ('handler.php'); // Checking whether the user is already authorised


// If true, redirects to the main page

mysql_connect('cybernik.ru', 'root', '') or die ('Ошибка соединения с MySQL!');
mysql_select_db('users') or die ('Ошибка соединения с базой данных MySQL!');
mysql_set_charset('utf8'); // выставляем кодировку базы данных


if($user) {
header ('Location: index.php');
exit();
}

if (!empty($_POST['login']) AND !empty($_POST['password'])) {

// Filtering the login and password

    $login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
    $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));

    var_dump($login, $password);

    $query = "INSERT INTO `users_accounts`(`login`,`password_md5`) VALUES ('".$login."','".$password."')";

   $result = mysql_query($query);

    var_dump ($result);

//mysql_query("INSERT INTO `users_accounts` (`login`, `password_md5`) VALUES ($login, $password)");
//echo 'Вы успешно зарегистрированы!';
    exit();

//INSERT INTO `users_accounts` (`id`, `name`, `login`, `e-mail`, `password_md5`, `salt`) VALUES ('3', 'few', 'fef', 'ewfew', 'ewfe', '0');

}

?>
<div>
    <table width="80%" align="center">
    <tr>
        <td align="center"><p><br/><br/>  
		<br/>

            Данное Пользовательское соглашение вступает в силу после нажатия Пользователем кнопки «зарегистрироваться» внизу страницы. Посещая Сайт, вы соглашаетесь с Пользовательским соглашением, всеми условиями и правилами, изложенными в нем.

			Материалы, размещенные на Сайте, охраняются в соответствии с авторскими правами и законом о торговой марке.

			Администрация Сайта имеет право в любое время дополнять и (или) изменять Пользовательское соглашение без предварительного уведомления Пользователя. Используя Сайт, вы соглашаетесь с обязанностью исполнения Пользовательского соглашения в любой версии.

			<br/><br/>
			<h3 align = "center">Регистрация нового пользователя</h3>
    		<form align = "center" action="registration.php" method="post">


			<p>
		    <label>Ваш логин:</br></label>
		    <input name="login" type="text" size="15" maxlength="15">
	   		 </p>


			<p>
		    <label>Ваш пароль:</br></label>
		    <input name="password" type="password" size="15" maxlength="15">
	    	</p>


			<p>
		    <input type="submit" name="submit" value="Зарегистрироваться">
		<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
			</p>
			</form>           
        </td>
    </tr>
</table>
</div>
<?php
require ('footer.php');
?>		
    </body>
</html>
