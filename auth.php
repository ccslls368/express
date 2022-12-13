<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="auth">
    <div class="main">
    <!-- Добавить текст-заглушку для залогиненых пользователей -->
    <div class="auth-form">
    <form method="GET" action="login.php">
        <input type="text" placeholder="Ваш логин/email" name="login" required>
        <input type="password" placeholder="Ваш пароль" name="password" required>
        <input class="login-button" type="submit" value="Войти">
    </form>
    </div>
    <div class="auth-buttons">
    <!--
    <a href="forgotPassword.php">Забыли пароль?</a>
    <label>или</label>
    -->
    <a href="registration.php">Зарегистрироваться</a>
    </div>
    <br>
    <button class="logout-button" onclick="window.location.href='logout.php'">
        <label>Выйти?</label>
    </button>
    </div>
</body>
</html>