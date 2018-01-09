
<html>

<form enctype="multipart/form-data" action="lesson13.php" method="POST">

   
    <input type="file" name="filename" size="9"/><input type="submit" value="Download"/>


</form>

<?php

if ($_FILES) {

    $name = $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"].$name);
    echo $name;
}

?>

</html>
