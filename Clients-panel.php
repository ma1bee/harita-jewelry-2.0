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
    <link rel="stylesheet" href="./css/main.scss">

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
                    <h1 class="title-admin">Заказчики</h1>
                </div>
                <a href="./create_Clients-panel.php" class="submit-panel">
                        <p class="submit-text-panel">Добавить запись</p>
                    </a>
            </div>
        </div>
    </div>
    <div class="sdada">
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
                    <p class="admin_table_cell-text">Почта</p>
                </div> <div class="table_sell">
                    <p class="admin_table_cell-text">Номер телефона</p>
                </div>
            </div>
        </div>
    </div>


    <?php
    if (isset($_GET['id_client'])) {
        $Client = $_GET['id_client'];
        $deleteClient = "DELETE FROM `Clients` WHERE id_client='$Client'";
        addslashes($deleteClient);
        $resDeleteTrack = mysqli_query($connect, $deleteClient) or die(mysqli_error($connect)); 
    }

    $infoClient = "SELECT *
                    FROM Clients";
    addslashes($infoClient);
    $resinfoClient = mysqli_query($connect, $infoClient) or die(mysqli_error($connect));
    while ($infoClient = mysqli_fetch_object($resinfoClient)) {
        echo "
    <div class=\"body-table\">
        <div class=\"admin-container\">
            <div class=\"admin_table_row\">
                <div class=\"admin_table_cell_first admin_projects_table_id\">
                    <p>$infoClient->id_client</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$infoClient->last_name_client</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$infoClient->name_client</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$infoClient->email</p>
                </div> <div class=\"admin_table_cell admin_projects_table_name\">
                <p class=\"admin_table_cell-text\">$infoClient->number</p>
            </div>
                
                <div class=\"admin_projects_table_act\">
                    <a href=\"edit_Users-jewel.php?idA=$infoClient->id_client\">Изменить</a>
                <a href=\"?id_client=$infoClient->id_client\">Удалить</a>
            </div>
        </div>
    </div>
";
    }
    
    ?>
    </div>

</body>

</html>