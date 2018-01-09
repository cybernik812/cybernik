<?php

if (isset($_POST['submit'])) {


	setcookie('Ten', $_POST['Ten'] ?? 0 );
	setcookie('Twenty', $_POST['Twenty' ?? 0]);

}

?>

//сохранить два значения переданные из формы в куки. Если первое значение больше второго, то
вывести об этом сообщение и наооборот.

submit
<form method = "post">
	<select name = "number">
		<option value = "10">Ten</option>
		<option value = "20">Twenty</option>
	</select>

	<input type = "number" name = "Ten" value = "10">
	<input type = "number" name = "Twenty" value = "20">
В
	<input type= "submit" type = "submit">

</form>

<?php

if ($_COOKIE['Ten'] > $_COOKIE['Twenty']) {

	echo 'Первая больше';

} elseif ($_COOKIE['Ten'] < $_COOKIE['Twenty'] ){

	echo 'Вторая больше';

} else {
	
	echo 'Нет кук';
}

?>

1. Вывести все cookies

<p>название куки: name; значение: value</p>


$_COOKIE isset = '';




