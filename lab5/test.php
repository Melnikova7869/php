<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ваша страна</title>
</head>
<body>
    <?php

        session_start();

        if (isset($_SESSION['user_country'])) {
            $country = $_SESSION['user_country'];
            echo "Ваша страна: $country";
        } else {
            echo "Информация о стране не доступна.";
        }
    ?>
</body>
</html>
