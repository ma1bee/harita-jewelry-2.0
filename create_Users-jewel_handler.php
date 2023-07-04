<?php
session_start();

include "./php-connect/connect.php";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email === '') {
        unset($email);
    }
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password === '') {
        unset($password);
    }
}

if (isset($_POST['role'])) {
    $role = $_POST['role'];
    if ($role === '') {
        unset($role);
    }
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);
$role = trim($_POST['role']);

$qCreateuser = "INSERT INTO `Users-jewel` (`email`,`password`,`id_role`) VALUES ('$email','$password','$role')";
addslashes($qCreateuser);
$resCreateuser = mysqli_query($connect, $qCreateuser) or die(mysqli_error($connect));

header("location: ./Users-jewel_panel.php");
