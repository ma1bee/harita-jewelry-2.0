<?php
session_start();

include "./php-connect/connect.php";

    // if (isset($_SESSION['id_users_jewel'])) {
    //   $IDuser = $_SESSION['id_users_jewel'];
    //   if ($IDuser === '') {
    //     unset($IDuser);
    //   }
    // }
    //     if (isset($IDuser)) {
    //       $query_access = "SELECT * FROM Users-jewel, roles WHERE id_users_jewel = '$IDuser' AND `Users-jewel`.ID_role = roles.id_roles";
    //       addslashes($query_access);
    //       $res_access = mysqli_query($connect, $query_access);
    //       $row_access = mysqli_fetch_object($res_access);

    //       $roles = $row_access->name_role;
        
    //     if($roles !== 'Администратор'){
    //       header("location:index-panel.php");
    //       $_SESSION['message'] = 'Доступ есть только у администраторов';
    //     }
    //   }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типы продуцкии</title>
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
                    <h1 class="title-admin">Мастера</h1>
                </div>
                <div class="btn_add">
                    <a href="./create_Masters-panel.php">Добавить запись</a>
                </div>
            </div>
        </div>
    </div>

    <div class="table">
        <div class="admin-container">
            <div class="table_row title">
                <div class="table_sell id">
                    <p class="admin_table_cell_first">ID</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text">Фамилия</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text">Имя</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text">Отчество</p>
                </div>
            </div>
        </div>
    </div>


    <?php
    if (isset($_GET['id_master'])) {
        $Master = $_GET['id_master'];
        $deleteMaster = "DELETE FROM `Masters` WHERE id_master='$Master'";
        addslashes($deleteMaster);
        $resDeleteTrack = mysqli_query($connect, $deleteMaster) or die(mysqli_error($connect)); 
    }

    $infoMaster = "SELECT *
                    FROM Masters";
    addslashes($infoMaster);
    $resinfoMaster = mysqli_query($connect, $infoMaster) or die(mysqli_error($connect));
    while ($infoMaster = mysqli_fetch_object($resinfoMaster)) {
        echo "
    <div class=\"body-table\">
        <div class=\"admin-container\">
            <div class=\"admin_table_row\">
                <div class=\"admin_table_cell_first admin_projects_table_id\">
                    <p>$infoMaster->id_master</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$infoMaster->last_name</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$infoMaster->name</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$infoMaster->patronymic</p>
                </div>
                
                <div class=\"admin_projects_table_act\">
                    <a href=\"edit_Users-jewel.php?idA=$infoMaster->id_master\">Изменить</a>
                <a href=\"?id_master=$infoMaster->id_master\">Удалить</a>
            </div>
        </div>
    </div>
";
    }
    
    ?>

</body>

</html>