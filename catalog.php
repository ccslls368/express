<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
</head>
<body>
    <?
    $categoryId = $_GET['category_id'];
    $categoryName = $_GET['category_name'];
    $item = mysqli_query($conn, "SELECT * FROM `item` WHERE `category_id`='$categoryId'");
    $item = mysqli_fetch_all($item);
    ?>
    <h1><? echo $categoryName; ?></h1>
    <?php 
    foreach($item as $i) {
        echo '
        <img src="./img/items/' . $i[2] . '" height="300"></img>
        <br>
        <label>' . $i[1] . '</label>
        <br>
        <label>' . $i[3] . '₽</label>
        ';
    }
    ?>
</body>
</html>