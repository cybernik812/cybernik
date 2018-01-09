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


<form action=upload.php method=post enctype=multipart/form-data>
<input type=file name=uploadfile>
<input type=submit value=Загрузить></form>


</body>
</html>