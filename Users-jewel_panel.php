<?php
session_start();

include "./php-connect/connect.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователи</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

<header>
        <div class="admin-container">
            <ul class="main-menu-panel">
                
            <li class="main-menu-panel_item"><a href="index.php"><img class="logo" src="img/logo.png"
                                alt="Логотпип" width="120"></a></li>
                <li class="main-menu-panel_item"><a href="./Type_product.php" class="menu-item-panel admin-menu-pressed">Типы продукции</a></li>
                <li class="main-menu-panel_item"><a href="./Users-jewel_panel.php" class="menu-item-panel">Пользователи</a></li>
                <li class="main-menu-panel_item"><a href="./Products-panel.php" class="menu-item-panel">Продукция</a></li>
                <li class="main-menu-panel_item"><a href="./Orders-panel.php." class="menu-item-panel">Заказы</a></li>
                <li class="main-menu-panel_item"><a href="./Materials-panel.php" class="menu-item-panel">Материалы</a></li>
                <li class="main-menu-panel_item"><a href="./Masters-panel.php" class="menu-item-panel">Мастера</a></li>
                <li class="main-menu-panel_item"><a href="./Clients-panel.php" class="menu-item-panel">Заказчики</a></li>
                <li class="main-menu-panel_item"><a class="menu-item" href="./php-handler/exit.php">Выйти</a></li>
            </ul>
        </div>
        <hr>
    </header>

    <div class="div-title-admin">
        <div class="admin-container">
            <div class="add-btn-divs">
                <div class="div-title-admin">
                    <h1 class="title-admin">Пользователи</h1>
                </div>

                <a href="./create_Users-jewel.php" class="submit-panel">
                        <p class="submit-text-panel">Добавить запись</p>
                    </a>
                <!-- <div class="btn_add">
                    <a href="./create_Users-jewel.php"><p>Добавить запись</p></a>
                </div> -->
            </div>
        </div>
    </div>
    <div class="sdada">
    <div class="table">
        <div class="admin-container">
            <div class="table_row title">
                <div class="table_sell id">
                    <p class="admin_table_cell_first-up">ID</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text-up">Почта</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text-up">пароль</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text-up">роль</p>
                </div>
            </div>
        </div>
    </div>


    <?php
    if (isset($_GET['id_users_jewel'])) {
        $userD = $_GET['id_users_jewel'];
        $qDeleteuser = "DELETE FROM `Users-jewel` WHERE id_users_jewel='$userD' ";
        addslashes($qDeleteuser);
        $resDeleteuser = mysqli_query($connect, $qDeleteuser) or die(mysqli_error($connect)); 
    }

    $qInfouser = "SELECT *
                    FROM `Users-jewel`, roles
                    WHERE `Users-jewel`.`ID_role` = roles.id_roles order by id_users_jewel";
    addslashes($qInfouser);
    $resInfouser = mysqli_query($connect, $qInfouser) or die(mysqli_error($connect));
    while ($Infouser = mysqli_fetch_object($resInfouser)) {
        echo "
    <div class=\"body-table\">
        <div class=\"admin-container\">
            <div class=\"admin_table_row\">
                <div class=\"admin_table_cell_first admin_projects_table_id\">
                    <p>$Infouser->id_users_jewel</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$Infouser->email</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_id_order\">
                    <p class=\"admin_table_cell-text\">$Infouser->password</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_id_order\">
                    <p class=\"admin_table_cell-text\">$Infouser->role</p>
                </div>
                <div class=\"admin_projects_table_act\">
                    <a href=\"edit_Users-jewel.php?idA=$Infouser->id_users_jewel\">Изменить</a>
                <a href=\"?id_users_jewel=$Infouser->id_users_jewel\">Удалить</a></div>
            </div>
        </div>
    </div>
";
    }
    
    ?>
    </div>

</body>

</html>