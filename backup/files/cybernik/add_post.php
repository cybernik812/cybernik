<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<head>
    <title> The Culinary Institut of America</title>
    <link href="styles.css" rel="stylesheet" type="text/css"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>

<?php
require ("header.php");
?>
<div>
    <table align="center">
    <tr>
        <td align="center"><p><br/>
            <form enctype="multipart/form-data" action="get_post.php" class="form" method="post"> 
                <p>Ваше имя:</p> <input class="add_name" type="text" name="name" /><br/><br/>
                <p>Когда добавлено:</p> <textarea class="textarea" type="text" name="published"maxlength="200" cols="60" rows="1"></textarea><br/>
                <p>Ваши комментарии:</p> <textarea class="textarea" type="text" name="description"maxlength="200" cols="60" rows="5"></textarea><br/>
                <p>Ваши тэги:</p> <textarea class="textarea" type="text" name="tags"maxlength="200" cols="60" rows="1"></textarea><br/>
                <p>Лайки:</p> <textarea class="textarea" type="text" name="likes"maxlength="200" cols="60" rows="1"></textarea><br/>
                <p>Добавить аватарку: </p><input type="file" name="ava_uploadfile">
                <p>Добавить изображение:</p><input type="file" name="uploadfile">
                <input type="submit" value="Отправить">  
            </form>
        </td>
    </tr>
    </table>
    </body>
    <br/><br/><br/><br/>
<?php
require ("footer.php");
?>
</html>
</body>