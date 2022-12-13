<?php

session_start();

require 'connect.php';

$login = $_GET['login'];
$password = $_GET['password'];

$sql = "SELECT * FROM user WHERE login='$login'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
$verify = password_verify($password, $user['password']);

if(!empty($user) && $verify) {
   $_SESSION["login"] = $login;
   echo "Вы вошли";
}
