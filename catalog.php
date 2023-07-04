<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/main.css.map" />
    <link rel="stylesheet" href="css/main.scss" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200&display=swap');
    </style>
    <title>HARITA</title>
</head>

<body>
    <header>
        <div class="full-header">
            <div class="up-header">
                <div class="icons">
                    <img class="social" src="./img/social.png" width="350">
                    <!-- <input type="submit" href="contact.html" class="submit"  value="Москва"></input> -->
                    <a href="contact.html" class="submit">
                        <p class="submit-text">Москва</p>
                    </a>
                </div>
            </div>
            <div class="under-header-2">
                <ul class="menu-list">
                    <li class="menu-list-navigation"><a href="o-brende.php">О бренде</a></li>
                    <li class="menu-list-navigation"><a href="contact.php">Контакты</a></li>
                    <li class="menu-list-navigation"><a href="index.php"><img class="logo" src="img/logo.png"
                                alt="Логотпип" width="250"></a></li>
                    <li class="menu-list-navigation"><a href="catalog.php">Каталог</a></li>
                    <li class="menu-list-navigation"><a href="./Users-jewel_panel.php">Админ панель</a></li>
                    <li class="menu-list-navigation user" id="myBtn"><a href="./index-auth.php"><img src="img/user.png" alt="Личный кабинет"></a></li>
                </ul>
            </div>
            </div>
            <div class="header-text-arrow">
                <a class="glav">Главная</a>
                <img class="arrow" src="./img/arrow.png" width="30">
                <a class="location">Каталог</a>
            </div>
        </div>
    </header>

    <div class="content-2">
        <div class="up-catalog">
            <a class="up-catalog-text">Наши коллекции по вашему заказу, по всем вопросам обращайтесь к менеджеру</a>
        </div>
        <div class="catalog-show">
            <img class="mini-eme" src="./img/mini-eme.png" width="500" alt="mini">
        </div>

        <div class="duble-catalog">

            <div class="andi-elden">
                <img class="andi" src="./img/andi.png" alt="andi">
                <img class="elden" src="./img/elden.png" alt="elden">
            </div>
            <div class="andi-elden">
                <img class="andi" src="./img/goldhead.png" alt="goldhead">
                <img class="elden" src="./img/teeth.png" alt="teeth">
            </div>
            <div class="andi-elden">
                <img class="andi" src="./img/leisure.png" alt="leisure">
                <img class="elden" src="./img/wrist.png" alt="wrist">
            </div>
        </div>

        <footer>
            <div class="footer>">
                        <div class="footer-main">

                            <ul class="colum-1">
                                <li class="green-foot"><a class="footer-navigation">HARITA YELLOW BRILLIANT</a></li>
                                <li class="green-foot"><a class="footer-navigation">HARITA SLAVE-BRACELET</a></li>
                            </ul>

                            <ul class="colum-2">
                                <li class="green-foot"><a class="footer-navigation">HARITA MAN RINGS</a></li>
                                <li class="green-foot"><a class="footer-navigation">HARITA MAN EARRINGS</a></li>
                            </ul>

                            <ul class="colum-3">
                                <li class="fiol-foot"><a class="footer-navigation" href="catalog.php">КАТАЛОГ</a> </li>
                                <li class="fiol-foot"><a class="footer-navigation" href="o-brende.php">О БРЕНДЕ</a></li>
                            </ul>

                            <ul class="colum-4">
                                <li class="fiol-foot"><a class="footer-navigation" href="contact.php">КОНТАКТЫ</a></li>
                                <li class="fiol-foot"><a class="footer-navigation" href="user.php">ЛИЧНЫЙ КАБИНЕТ</a></li>
                            </ul>
                        </div>

                        <div class="yellow-lane-footer">
                            <img class="lane-footer" src="./img/yellow-lanes-footer-under.png" alt="yellow-lanes">
                        </div>

                        <div class="under-footer">
                            <p class="big-duck">© 2020-2023 Ювелирный мастерская HARITA, г. Москва.</p>
                        </div>

                    </div>
        </footer>
    </div>
</body>