<!-- <?php 
    session_start();
    if (!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 'обновите страницу';
    }
    else $_SESSION['counter']++;

    $_SESSION['counter'] = $visitCount;

    echo "Вы посетили наш сайт $visitCount раз!";

   
?> -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ввод страны</title>
</head>
<body>
    <h1>Введите вашу страну</h1>
    <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <label for="country">Страна:</label>
        <input type="text" id="country" name="country" required>
        <button type="submit">Отправить</button>
    </form>

    <?php
        /* session_start(); */

        if (isset($_POST['country'])) {
            $country = trim($_POST['country']);

            $_SESSION['user_country'] = $country;
        }
    ?>
</body>
</html>
