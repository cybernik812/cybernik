<?php

/**  @var $post Post */

?>
<?php if ($post): ?>
    <div>
        <h1> id="title_post"><?php echo $post->title ?></h1>
        <p><?php echo $post->text ?></p>
    </div>
<?php else: ?>
    <div>
            <h1> id="title_post">404 Ошибка</h1>
        </div>
<?php endif; ?>
<script>
    var title = document.getElementById('title_post');
    var newTitle =  '';
    for (var i = titlePost.innerHTML.lengh - 1; i >= 0; i--) {
        newTitle = newTitle + titlePost.innerHTML[i];
    }
    titlePost.innerHTML = newTitle;
</script>


