<?php /**@var $user User */?>

<?php if($user):?>
    <p>Ты <?php echo $user->name ?></p>
<?php else: ?>
    <p>Не верный логин с паролем</p>
<?php endif; ?>


