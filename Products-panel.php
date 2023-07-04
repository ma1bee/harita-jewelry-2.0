<?php
session_start();

include "./php-connect/connect.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукция</title>
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
                    <h1 class="title-admin">Продукция</h1>
                </div>
                <div class="btn_add">
                    <a href="./create_Products.php">Добавить запись</a>
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
                    <p class="admin_table_cell-text">ID_Материала</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text">Название</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text">Дата создания</p>
                </div>
                <div class="table_sell">
                    <p class="admin_table_cell-text">Тип продукции</p>
                </div>

            </div>
        </div>
    </div>


    <?php
    if (isset($_GET['id_product'])) {
        $product = $_GET['id_product'];
        $qDeleteProduct = "DELETE FROM `Products` WHERE id_product='$product'";
        addslashes($qDeleteProduct);
        $resDeleteTrack = mysqli_query($connect, $qDeleteProduct) or die(mysqli_error($connect)); 
    }

    $qInfoProduct = "SELECT *
                    FROM `Products`, Materials, Type_products
                    WHERE `Products`.`ID_materials` = Materials.id_materials";
                    // , `ID_type_product` = Type_products.id_type_product
    addslashes($qInfoProduct);
    $resInfoProduct = mysqli_query($connect, $qInfoProduct) or die(mysqli_error($connect));
    while ($InfoTrack = mysqli_fetch_object($resInfoProduct)) {
        echo "
    <div class=\"body-table\">
        <div class=\"admin-container\">
            <div class=\"admin_table_row\">
                <div class=\"admin_table_cell_first admin_projects_table_id\">
                    <p>$InfoTrack->id_product</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_name\">
                    <p class=\"admin_table_cell-text\">$InfoTrack->id_materials</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_id_order\">
                    <p class=\"admin_table_cell-text\">$InfoTrack->name_product</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_id_order\">
                    <p class=\"admin_table_cell-text\">$InfoTrack->date_of_creation</p>
                </div>
                <div class=\"admin_table_cell admin_projects_table_id_order\">
                    <p class=\"admin_table_cell-text\">$InfoTrack->id_type_product</p>
                </div>
                <div class=\"admin_projects_table_act\">
                    <a href=\"edit_Products.php?idA=$InfoTrack->id_product\">Изменить</a>
                <a href=\"?id_product=$InfoTrack->id_product\">Удалить</a>
            </div>
        </div>
    </div>
";
    }
    
    ?>

</body>

</html>