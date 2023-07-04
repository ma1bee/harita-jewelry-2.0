<?php

session_start();
include "./php-connect/connect.php";

if(isset($_GET['idA'])) {
    $user = $_GET['idA'];
}

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
    
$queryuser = "UPDATE `Users-jewel` SET `email` = '$email', `password` = '$password', `id_role` = '$role' WHERE `id_users_jewel` = '$user'";
addslashes($queryuser);
$resProject = mysqli_query($connect, $queryuser) or die(mysqli_error($connect));

header("location: ./Users-jewel_panel.php");


?>
