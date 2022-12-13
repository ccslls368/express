<?php
require 'connect.php';
$query = $_GET['query'];
$items = mysqli_query($conn,"SELECT * FROM `item` WHERE `name`='$query'");
$items = mysqli_fetch_all($items);
foreach ($items as $item) {
    echo '<a href="item.php?id=' . $item[0] . '&name=' . $item[1] . '&img=' . $item[2] . '&price=' . $item[3] . '">' . $item[1] . '</a>';
}
?>