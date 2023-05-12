<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Личный сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
    <?php
        include "menu.php";
    ?>

    <h1>Личный сайт</h1>

    <div class="center">
    <img src="images/planet.jpg">
        <div class="box_text">
            <p><b>Добрый день.</b> Меня зовут <i>Владислав.</i> </p>
            <p>Добро пожаловать на этот сайт.</p>
            <p>Сейчас вы находитесь на главной странице сайта.</p>
            <p>Есть один интересный сайт - <a href="https://youtube.com" target="_blank">YouTube</a></p>
            <p>На этом сайте вы можете сыграть с следующие игры:
            <?php
                include "menu.php";
            ?>
            </p>
        </div>
    </div>
</div>
<div class="footer">
    Copyright &copy; <?php echo date("Y");?> Vladislav
</div>

</body>
</html>