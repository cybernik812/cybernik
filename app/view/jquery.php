<script type="text/javascript"
        src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#searchQuery').css('border-color', 'red');
        $('.post').slideUp(3000);
        $('.post:eq(1)').html('new html');
        $('.post:eq(1)').text('Изменить');

        $('.content').on('click', '#searchButton', function () {
            alert('Нажали');
        });

        $.ajax({
            url: "index.php?action=ajax",
            data: {},
            type : "post",
            dataType: "json",
            success: function (posts) {
                posts.forEach(function (post) {
                    $('posts').append("<div class=\"posts\">\n" +
                        "            <p class=\"title\">"+post.title+"</p>\n" +
                    "            <p class=\"text\">"+post.text+"</p>" +
                    "       </div>");
                });
            },
            error: function (response) {
            }
        });
    });
</script>
<div class="header">
     <img id="logo">
</div>
<div class="content">
    <input type="text" id="searchQuery">
    <input type="button" value="Искать" id="searchButton">
    <div class="posts">
        <div class="posts">
            <p class="title">Заголовок 1</p>
            <p class="text">Текст</p>
        </div>
        <div class="post">
            <p class="title">Заголовок 2</p>
            <p class="text">Текст 2</p>
        </div>
    </div>
</div>
