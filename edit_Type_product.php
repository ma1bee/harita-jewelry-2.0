<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение Продукции</title>
    <link rel="stylesheet" href="./scss/main.css">
</head>



<body>



<div class="track_create">
        <div class="wrapper-container">
            <div class="form-content">
                <div class="div-and-close">
                    <div class="div-create_title">
                        <a class="create_title">Изменение</a>
                    </div>
                    <div class="div-close-img div-close-btn-reg">
                        <a href="./Type_product.php" class="close-img">закрыть</a>
                    </div>
                </div>

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
                        // } else {
                        //     $_SESSION['message'] = 'Доступ есть только у админов!';
                        //     header("location: ./index.php");
                        // }

                        if (isset($_GET['idA'])) {
                            $TypeProduct = $_GET['idA'];
                        }

                        echo "<form class=\"table_add\" action=\"./edit_Type-product-handler.php?idA=$TypeProduct\" method=\"post\">";

                        $qInfoTypeProduct = "SELECT * FROM `Type_products` WHERE id_type_product='$TypeProduct'";
                        addslashes($qInfoTypeProduct);
                        $resInfoTypeProduct = mysqli_query($connect, $qInfoTypeProduct) or die(mysqli_error($connect));
                        $InfoTypeProduct = mysqli_fetch_object($resInfoTypeProduct);
                    ?>

                    <div class="table_add_row">
                    <div class="div-input_form-login">
                            <input type="name_type_product" class="input_form-product" name="name_type_product" placeholder="почта" value="<?php echo "".$InfoTypeProduct->name_type_product.""; ?>">
                        </div>
                        <!-- <div class="div-input_form-login"> -->
                            <!-- <input type="password" class="input_form-email" name="password" placeholder="пароль" value="
                        </div>
                        <div class="div-input_form-email">
                           
                        </div>
                    </div>
                    <div class="button-panel">
                        <input type="submit" class="submit" value="Изменить">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>