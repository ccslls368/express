<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="main">
        <?php
            session_start();
            require 'connect.php';
            $itemId = $_GET['id'];
            $itemImage = $_GET['img'];
            $itemName = $_GET['name'];
            $price = $_GET['price'];

            $username = $_SESSION['login'];
            $user = mysqli_query($conn, "SELECT * FROM `user` WHERE `login`='$username'");
            $user = mysqli_fetch_assoc($user);
            $userId = $user['user_id'];
        ?>        
        <img class="item-img" src="./img/items/<? echo $itemImage; ?>" alt="item">
        <div class="item-description">
            <h1><? echo $itemName; ?></h1>
            <label class="price"><? echo $price; ?>₽<label>
            <br>
            <?php echo '<a href="addToCart.php?id=' . $itemId . '&quantity=1&price=' . $price . '&user_id=' . $userId . '"><button class="add-to-cart-button">Добавить в корзину</button></a>' ?>
        </div>
    </div>
</body>
</html>