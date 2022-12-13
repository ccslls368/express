<?php
require 'connect.php';

$itemId = $_GET['id'];
$quantity = $_GET['quantity'];
$price = $_GET['price'];
$userId = $_GET['user_id'];

$result = mysqli_query($conn, "INSERT INTO `cart`(`item_id`, `quantity`, `price`, `user_id`) VALUES ('$itemId','$quantity', '$price', '$userId')");

echo "Добавлено в корзину";