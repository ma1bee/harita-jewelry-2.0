<?php
session_start();

include "./php-connect/connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css" />
    <title>Авториация</title>
</head>

<body>
    <div class="cabinet-avtorization">
        <div class="avtorization">
            <div class="avtorization-close">

                <a class="close" href="index.php"><img src="img/close.png" alt="close"></a>
            </div>
            <form class="auth_form" action="./php-handler/auth.php" method="post">

                <div class="vhod">
                    <a class="vhod-text">ВХОД</a>
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
                <div class="button-avtorization">
                    <input type="submit" name="submit" class="submit-1" title="Лес го" value="Войти">
                </div>
                <div class="button-regis">
                    <a class="regis" title="Вэлком ту зе клаб бадди" href="./index-reg.php"
                        value="Зарегистрироваться">ЗАРЕГИСТРИРОВАТЬСЯ</a>
                    <!-- <a type="submit" class="regis" title="Вэлком ту зе клаб бадди" value="Зарегистрироваться">ЗАРЕГИСТРИРОВАТЬСЯ</a> -->
                </div>
        </div>
        </form>
    </div>
</body>

</html>