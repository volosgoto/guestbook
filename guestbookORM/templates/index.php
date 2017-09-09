<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Гостева книга</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="templates/css/style.css" />

</head>

<body>

    <div id="header">
        <!-- Верхняя часть страницы -->

           <img class="logo" src="templates/img/logo.jpg"   alt="logo" />

        <span class="slogan">Ведите свой блог</span>
        <!-- Верхняя часть страницы -->
    </div>

    <div id="content">
        <!-- Заголовок -->
        <h1>Добро пожаловать на наш сайт!</h1>
        <!-- Заголовок -->
        <!-- Область основного контента -->
        <h3>Зачем </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis, incidunt quas! Expedita hic, dicta, laboriosam impedit maxime voluptas similique alias veritatis quibusdam molestiae,
            nostrum vitae. Laborum eos accusamus a iusto.</p>
        <h3>Все записи</h3>
        <p>
            <?php foreach ($data as $line) { ?>
            <article>
                <?php  echo $line->getMessage(); ?>
            </article>
            <?php } ?>

            <!---->
            <!--<h2>Добавить запись</h2>-->
            <!--<form action="" method="POST">-->
            <!--    <textarea rows="10" cols="45" name="text"></textarea>-->
            <!--    <p></p>-->
            <!--    <input type="submit" name="submit" value="Добавить">-->
            <!--    <input type="reset" name="reset" value="Очистить">-->
            <!--</form>-->

        </p>

        <!-- Область основного контента -->
    </div>
    <div id="nav">
        <!-- Навигация -->
        <h2>Навигация </h2>
        <!-- Меню -->
        <ul>
            <li><a href='index.php'>Домой</a>
            </li>
            <li><a href='about.php'>О нас</a>
            </li>
            <li><a href='contact.php'>Контакты</a>
            </li>
            <li><a href='table.php'>Добавить</a>
        </ul>
        <!-- Меню -->
        <!-- Навигация -->
    </div>
    <div id="footer">
        <!-- Нижняя часть страницы -->
        &copy; Копирайт
        <!-- Нижняя часть страницы -->
    </div>
</body>

</html>