<?php
    session_start();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
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
            <div class="header-text-arrow">
                <a class="glav">Главная</a>
                <img class="arrow" src="./img/arrow.png" width="30">
                <a class="location">Каталог</a>
            </div>
        </div>
    </header>

    <section>
        <div class="content-2">
            <div class="up-slider">
                <a class="up-slider-text">HARITA - это ювелирный украшения из премиальных драгоценных материалов</a>
            </div>

           
            <div class="wrapper">
                <div class="image-slider swipper-container">
                    <div class="image-slider__wrapper swiper-wrapper">

                        <div class="image-slider__slide swiper-slide">
                            <div class="main-slider">
                                <img src="./img/slider-1.png" alt="Картинка" width="600">
                            </div>
                        </div>

                        <div class="image-slider__slide swiper-slide">
                            <div class="main-slider">
                                <img src="./img/slider-2.png" alt="Картинка" width="600">
                            </div>
                        </div>

                        <div class="image-slider__slide swiper-slide">
                            <div class="main-slider">
                                <img src="./img/slider-3.png" alt="Картинка" width="600">
                            </div>
                        </div>

                        <div class="image-slider__slide swiper-slide">
                            <div class="main-slider">
                                <img src="./img/slider-4.png" alt="Картинка" width="600">
                            </div>
                        </div>

                        

                    <!-- <div class="swiper-slide">
                        <img class="main-slider" src="./img/slider-2.png" width="600" />
                    </div>
                    <div class="swiper-slide">
                        <img class="main-slider" src="./img/slider-3.png" width="600" />
                    </div>
                    <div class="swiper-slide">
                        <img class="main-slider" src="./img/slider-4.png" width="600" />
                    </div> -->
                </div>
                
                <!-- <div class="slider-circle">
                    <div class="circle-fiol"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div> -->
            </div>

           
            

            <div class="gold-lanes">
                <img class="gold-lanes-png" src="./img/yellow-lanes-footer-under.png" width="1510px" height="4">
            </div>

            <div class="up-sozi">
                <p class="sozi-text">Основатель начал свою работу в небольшом помещении, где он изготавливал украшения
                    для своих первых клиентов. Сначала было трудно, но со временем он стал получать все больше заказов,
                    и его мастерская начала развиваться.</p>
                <img class="sozi-img" src="./img/osnova.png">
            </div>

            <div class="sozi">

                <div class="gold-sozi">
                    <img class="gold-sozi-png" src="./img/gold-girl-o-brende.png" height="700">
                </div>
                <div class="gold-sozi-right">
                    <p class="gold-text">HARITA стала одной из самых известных и престижных в городе. Основатель
                        создавал уникальные и неповторимые украшения, с самыми редкими и красивыми драгоценными камнями,
                        и каждое украшение было создано с большой любовью и вниманием к деталям.
                        Мастерская привлекала клиентов со всего города и даже за его пределами. Команда HARITA нацелена
                        на разную аудиторию: от создания ювелирных изделий на мероприятия, до личного пользования.</p>
                </div>



            </div>
        </div>

        <div class="up-footer">
            <div class="logo-lane">

                <img class="left-lane-img" src="img/yellow-lanes-footer-left.png" alt="yellow-lanes">
                <a href="index.php"><img class="logo-2" src="img/logo.png" alt="Логотпип" width="250"></a>
                <img class="right-lane-img" src="img/yellow-lanes-footer-left.png" alt="yellow-lanes">
                
            </div>
        </div>
        
    </section>

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
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="/slider.js">
        new Swiper('.image-slider',{

    loop: true,

    autoplay: { //автопроигрывать слайдер
    delay: 2500, //задержка 2500 миллисекунд
    stopOnLastSlide: false, //не отсанавливаться на последнем слайде
    },

    slidesPerView: 2.5, //показывать 2.5 слайда на одном экране

    });
</script>
