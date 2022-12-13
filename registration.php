<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <?php
    require 'connect.php';
    // Вводим в переменную login данные из поля login
    $login = $_POST['login'];
    // Вводим в переменную password данные из поля password
    $password = $_POST['password'];
    // шифрование пароля
    $cryptedPassword = password_hash($password, PASSWORD_DEFAULT);
    // Проверяем наличие пользователя с похожим логином в базе
    $checkLogin = mysqli_query($conn, "SELECT * from `user` WHERE `login` = '$login'");

    if (mysqli_num_rows($checkLogin) > 0)
        echo "такой логин есть";
    else
        echo "такого логина нет";
        // Отправляем запрос на создание пользователя в базе данных
        $result = mysqli_query($conn, "INSERT INTO `user`(`login`, `password`) VALUES ('$login','$cryptedPassword')");
    
    ?>
    <form method="POST">
        <input name="login" type="text" placeholder="Логин или email" required>
        <input name="password" type="password" placeholder="Пароль" required>
        <input type="submit" value="Зарегестрироваться">
    </form>
</body>
</html>