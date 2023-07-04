<?php

session_start();

include "../php-connect/connect.php";

if (isset($_POST['email'])) {
    $login = $_POST['email'];
    if ($login === '') {
        unset($login);
    }
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password === '') {
        unset($password);
    }
}

$login = trim($_POST['email']);
$password = trim($_POST['password']);

$check_user = "SELECT * FROM `Users-jewel` WHERE `email`= '$login'";

$result = mysqli_query($connect, $check_user);

$info_user = mysqli_fetch_array($result);

if (empty($info_user['id_users_jewel'])) {
    $_SESSION['message'] = 'Неправильный логин или пароль!';
    header("location: ../index-auth.php");
} else {
    if (password_verify($password, $info_user['password'])) {
        $_SESSION['email'] = $info_user['email'];
        $_SESSION['id_users_jewel'] = $info_user['id_users_jewel'];
        header("location: ../index.html");
    } else {
        $_SESSION['message'] = 'Неправильный пароль!';

        header("location: ../index-auth.php");
    }
}
