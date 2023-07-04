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

    if(isset($_GET['idA'])) {
        $TypeProduct = $_GET['idA'];
    }

    if (isset($_POST['name_type_product'])) {
        $name_type_product = $_POST['name_type_product'];
        if ($name_type_product === '') {
            unset($name_type_product);
        }
    }

    $TypeProduct_name = trim($_POST['product_name']);

        
    $queryTypeProduct = "UPDATE `Type_products` SET `name_type_product` = '$name_type_product' = '$TypeProduct'";
    addslashes($qInfoProduct);
    $resInfoTypeProduct = mysqli_query($connect, $qInfoTypeProduct) or die(mysqli_error($connect));
    $InfoTypeProduct = mysqli_fetch_object($resInfoTypeProduct);

    header("location: ./Type_product.php");


    ?>
