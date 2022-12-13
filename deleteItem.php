<?php
require 'connect.php';
$cartId = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM `cart` WHERE `cart_id`='$cartId'");

echo "Предмет удалён";