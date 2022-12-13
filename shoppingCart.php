<?php
session_start();
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    $username = $_SESSION['login'];
    $user = mysqli_query($conn, "SELECT * FROM `user` WHERE `login`='$username'");
    $user = mysqli_fetch_assoc($user);
    $userId = $user['user_id'];
    
    $cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE `user_id`='$userId'");
    ?>
    <h1>Ваша корзина</h1>
    <div>
        <?php 
        foreach ($cart as $cartItem) {
            $itemId = $cartItem['item_id'];
            $item = mysqli_query($conn, "SELECT * FROM item WHERE item_id='$itemId'");
            $item = mysqli_fetch_assoc($item);

            echo '
                <label>Название:</label>
                <label>' . $item['name'] . '</label>
                <label>Количество:</label>
                <label>' . $cartItem['quantity'] . '</label>
                <label>Цена:</label>
                <label>' . $cartItem['price'] . '</label>
                <a href="deleteItem.php?id=' . $cartItem['cart_id'] . '"><button class="delete-item">Удалить?</button></a>
                <br>
            ';
        }
        ?>
        <!--
        <label>Количество:</label>
        <label>1</label>
        <label>Цена:</label>
        <label>3599</label>
        <button><label>Убрать из корзины?</label></button>
        <label>Общая цена:</label>
        <label>3599</label>
        -->
    </div>
</body>
</html>