<?php
session_start();

include "./php-connect/connect.php";

// if (isset($_SESSION['ID_users'])) {
//     $IDuser = $_SESSION['ID_users'];
//     if ($IDuser === '') {
//         unset($IDuser);
//     }
// }
// if (isset($IDuser)) {
//     $query_access = "SELECT * FROM users, role WHERE ID_users = '$IDuser' AND users.ID_role = role.iD_role";
//     addslashes($query_access);
//     $res_access = mysqli_query($connect, $query_access);
//     $row_access = mysqli_fetch_object($res_access);
//     $roles = $row_access->name_role;
// } 

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/main.css.map" />
    <link rel="stylesheet" href="css/main.scss" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap');
    </style>
    <title>HARITA-REG</title>
</head>

<body>
    <div class="cabinet-registration">
        <div class="registration">
            <div class="regis-close">
                <a class="close-2" href="index.php"><img src="img/close.png" alt="close"></a>
            </div>
            <form class="reg_form" action="./php-handler/reg.php" method="post">

                <div class="vhod">
                    <a class="regis-text">РЕГИСТРАЦИЯ</a>
                </div>
                <div class="email-password">
                    <label for="email"></label>
                    <input type="email" class="input-avtorization" name="email" required="required" placeholder="EMAIL">
                </div>
                <div class="email-password">
                    <label for="password"></label>
                    <input type="password" class="input-avtorization" name="password" required="required"
                        placeholder="Пароль">
                </div>
                <div class="email-password">
                    <label for="password"></label>
                    <input type="password" class="input-avtorization" name="confirmpassword" required="required"
                        placeholder="Повторите пароль">
                </div>
                <div class="button-avtorization">
                    <input type="submit" class="submit-2" title="Лес го" value="ЗАРЕГИСТРИРОВАТЬСЯ">
                </div>
                <div class="button-regis">
                    <a href="./index-auth.php" type="submit" class="regis-2" title="Вэлком ту зе клаб бадди"
                        value="Зарегистрироваться">ВОЙТИ</a>
                </div>
            </form>
        </div>

    </div>

    </div>
    </div>
    </div>
</body>