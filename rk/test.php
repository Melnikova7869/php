<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form action="forma_registratsii.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="surname">Фамилия:</label>
        <input type="text" id="surname" name="surname" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required
            <?php
                if (isset($_SESSION['user_email'])) {
                    echo "value='{$_SESSION['user_email']}'";
                }
            ?>
        >
        <br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Зарегистрироваться</button>
    </form>

    <?php
        // Обработка формы регистрации (не показана)
    ?>
</body>
</html>
 -->