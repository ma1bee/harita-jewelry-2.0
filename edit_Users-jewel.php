<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение Пользователи</title>
    <link rel="stylesheet" href="./scss/main.css">
</head>


<body>
    

<div class="user_create">
        <div class="wrapper-container">
            <div class="form-content">
                <div class="div-and-close">
                    <div class="div-create_title">
                        <a class="create_title">Изменение</a>
                    </div>
                    <div class="div-close-img div-close-btn-reg">
                        <a href="./Users-jewel_panel.php" class="close-img">закрыть</a>
                    </div>
                </div>

                    <?php
                        session_start();
                        
                        include "./php-connect/connect.php";

                        if (isset($_GET['idA'])) {
                            $user = $_GET['idA'];
                        }

                        echo "<form class=\"table_add\" action=\"./edit_Users-jewel_handler.php?idA=$user\" method=\"post\">";

                        $qInfouser = "SELECT * FROM `Users-jewel` WHERE id_users_jewel='$user'";
                        addslashes($qInfouser);
                        $resInfouser = mysqli_query($connect, $qInfouser) or die(mysqli_error($connect));
                        $Infouser = mysqli_fetch_object($resInfouser);
                    ?>

                    <div class="table_add_row">
                    <div class="div-input_form-login">
                            <input type="email" class="input_form-email" name="email" placeholder="почта" value="<?php echo "".$Infouser->email.""; ?>">
                        </div>
                        <div class="div-input_form-login">
                            <input type="password" class="input_form-email" name="password" placeholder="пароль" value="<?php echo "".$Infouser->password.""; ?>">
                        </div>
                        <div class="div-input_form-email">
                            <?php
                            $qInfoUser2 = "SELECT *
                                            FROM roles";
                            addslashes($qInfoUser2);
                            $resInfoUser2 = mysqli_query($connect, $qInfoUser2) or die(mysqli_error($connect));
                            echo "<select class=\"select-user\" name=\"role\">";
                            while ($InfoUser2 = mysqli_fetch_object($resInfoUser2)) {
                                echo "<option name=\"" . $InfoUser2->id_roles . "\" value=\"" . $InfoUser2->id_roles . "\">" . $InfoUser2->role . "</option>";
                            }
                            echo "</select>";
                            ?>
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