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
                    <img class="social" src="./img/social.png" alt="Социальные сети" width="350">
                    <!-- <input type="submit" href="contact.html" class="submit"  value="Москва"></input> -->
                    <a href="contact.php" class="submit">
                        <p class="submit-text">Москва</p>
                    </a>
                </div>
            </div>
            <div class="under-header">
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
    </header>



    <div class="container">

        <!-- <div class="modal-container" id="myModal">
            <div class="modal-wrapper">
                <div class="modal">


                </div>

            </div>
        </div> -->
    </div>

    <!-- <div class="cabinet-registration">
        <div class="registration">
            <div class="regis-close">
                <a class="close-2" href="index.php"><img src="img/close.png" alt="close"></a>
            </div>
            <form>

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
                    <input type="password" class="input-avtorization" name="password" required="required"
                        placeholder="Повторите пароль">
                </div>
                <div class="button-avtorization">
                    <input type="submit" class="submit-2" title="Лес го" value="ЗАРЕГИСТРИРОВАТЬСЯ">
                </div>
                <div class="button-regis">
                    <a type="submit" class="regis-2" title="Вэлком ту зе клаб бадди"
                        value="Зарегистрироваться">ВОЙТИ</a>
                </div>
            </form>
        </div>
    </div> -->





    <!-- <script src="app.js"></script> -->
    <script src="app.js"></script>
    <section class="content">
        <div class="first-block">
            <a class="jewel">Создай своё украшение</a>
            <!-- <img class="jewellers" src="./img/jeweller.png" width="1500"> -->
        </div>

        <div class="demonstration-jewelry">
            <div class="yellow-brilliant">

                <div class="right-png">
                    <img class="yellow-brilliant-png" src="img/yellow-brilliant.png" width="800" alt="yellow-brilliant">
                </div>

                <div class="right">
                    <h1 class="text-right">HARITA YELLOW BRILLIANT</h1>

                    <img class="yellow-lanes-right" src="img/yellow-lanes-339.png" width="300" alt="yellow-lanes">

                    <a class="text-under-right">Выдающиеся серги HARITA в эксклюзивном исполнении лучших мастеров</a>

                    <a href="catalog.php" class="submit-two">СМОТРЕТЬ УКРАШЕНИЯ</a>

                </div>

            </div>

            <div class="slave-bracelet">

                <div class="left">

                    <h1 class="text-left">HARITA SLAVE-BRACELET</h1>

                    <img class="yellow-lanes-left" src="img/yellow-lanes-339.png" width="300" alt="yellow-lanes">

                    <a class="text-under-left">Ваш индивидуальный слейв-браслет HARITA делающийся по вашим размерам</a>

                    <a href="catalog.php" class="submit-three">СМОТРЕТЬ УКРАШЕНИЯ</a>

                </div>

                <div class="left-png">
                    <img class="slave-bracelet-png" src="./img/slave-bracelet.png " width="690" height="600"
                        alt="slave-bracelet">
                </div>

            </div>
        </div>

        <div class="man-ring">

            <div class="man-right-png">
                <img class="man-rings-png" src="img/man-ring.png" width="800" alt="man-rings">
            </div>

            <div class="right">
                <h1 class="text-right">HARITA MAN RINGS</h1>

                <img class="yellow-lanes-right" src="img/yellow-lanes-339.png" width="300" alt="yellow-lanes">

                <a class="text-under-right">Мужские кольца HARITA придадут Вам стиль, брутальность и элегантность</a>

                <a href="catalog.php" class="submit-two">СМОТРЕТЬ УКРАШЕНИЯ</a>

            </div>
        </div>

        <div class="man-earrings">

            <div class="left">

                <h1 class="text-left">HARITA MAN EARRINGS </h1>

                <img class="yellow-lanes-left" src="img/yellow-lanes-339.png" width="300" alt="yellow-lanes">

                <a class="text-under-left">Мужские серьги HARITA - это не только украшение, но и символ силы и
                    уверенности </a>

                <a href="catalog.php" class="submit-three">СМОТРЕТЬ УКРАШЕНИЯ</a>

            </div>

            <div class="left-png">
                <img class="man-earrings-png" src="./img/earring.png " width="690" height="600" alt="man-earrings">
            </div>

        </div>


        <div class="PRODUCTION">
            <div class="text-photo">
                <h2 class="prod">ПРОИЗВОДСТВО</h2>
                <p class="moscow">Московская ювелирная мастерская «HARITA» была основана в 2020 году и занимается
                    производством эксклюзивных высококачественных ювелирных изделий </p>
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

    <!-- <div class="cabinet-avtorization">
        <div class="avtorization">
            <div class="avtorization-close">
                
                <a class="close" href="index.php"><img src="img/close.png" alt="close"></a>
            </div>
            <form>
            
                <div class="vhod">
                    <a class="vhod-text">ВХОД</a>
                </div>
                <div class="email-password">
                    <label for="email"></label>
                    <input type="email" class="input-avtorization" name="email" required="required" placeholder="EMAIL"> 
                
                </div>
                <div class="email-password">
                    <label for="password"></label>
                    <input type="password" class="input-avtorization" name="password" required="required" placeholder="Пароль">
                </div>
                <div class="button-avtorization">
                    <input type="submit" class="submit-1" title="Лес го" value="Войти">
                </div>
                <div class="button-regis"> -->
    <!-- <a class="regis" title="Вэлком ту зе клаб бадди" value="Зарегистрироваться"></a> -->
    <!-- <a type="submit" class="regis" title="Вэлком ту зе клаб бадди" value="Зарегистрироваться">ЗАРЕГИСТРИРОВАТЬСЯ</a>
                </div>
            </form>        
        </div>
    </div>

     <a type="submit" class="regis" title="Вэлком ту зе клаб бадди" value="Зарегистрироваться">ЗАРЕГИСТРИРОВАТЬСЯ</a>

    <div class="cabinet-registration">
        <div class="registration">
            <div class="regis-close">
                <a class="close-2" href="index.php"><img src="img/close.png" alt="close"></a>
            </div>
            <form>
            
                <div class="vhod">
                    <a class="regis-text">РЕГИСТРАЦИЯ</a>
                </div>
                <div class="email-password">
                    <label for="email"></label>
                    <input type="email" class="input-avtorization" name="email" required="required" placeholder="EMAIL">
                </div>
                <div class="email-password">
                    <label for="password"></label>
                    <input type="password" class="input-avtorization" name="password" required="required" placeholder="Пароль">
                </div>
                <div class="email-password">
                    <label for="password"></label>
                    <input type="password" class="input-avtorization" name="password" required="required" placeholder="Повторите пароль">
                </div>
                <div class="button-avtorization">
                    <input type="submit" class="submit-2" title="Лес го" value="ЗАРЕГИСТРИРОВАТЬСЯ">
                </div>
                <div class="button-regis">
                    <a type="submit" class="regis-2" title="Вэлком ту зе клаб бадди" value="Зарегистрироваться">ВОЙТИ</a>
                </div>
            </form> -->
</body>

</html>