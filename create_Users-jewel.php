<?php
session_start();

include "./php-connect/connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователи добавление</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="user_create">
        <div class="wrapper-container">
            <div class="form-content">
                <div class="div-and-close">
                    <div class="div-create_title">
                        <a class="create_title">Добавление</a>
                    </div>
                    <div class="div-close-img div-close-btn-reg">
                        <a href="./Users-jewel_panel.php" class="close-img">Закрыть</a>
                    </div>
                </div>
                <form class="table_add" action="./create_Users-jewel_handler.php" method="post">
                    <div class="table_add_row">
                        <div class="div-input_form-login">
                            <input type="email" class="input_form-email" name="email" placeholder="почта">
                        </div>
                        <div class="div-input_form-login">
                            <input type="password" class="input_form-email" name="password" placeholder="пароль">
                        </div>
                        <div class="div-input_form-email">
                            <?php
                            $qInfouser = "SELECT *
                                            FROM roles";
                            addslashes($qInfouser);
                            $resInfouser = mysqli_query($connect, $qInfouser) or die(mysqli_error($connect));
                            echo "<select class=\"select-user\" name=\"role\">";
                            while ($Infouser = mysqli_fetch_object($resInfouser)) {
                                echo "<option name=\"" . $Infouser->id_roles . "\" value=\"" . $Infouser->id_roles . "\">" . $Infouser->role . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </div>
                    </div>
            </div>
            <div class="button-panel">
                <input type="submit" class="submit" value="Добавить">
            </div>
            </form>
        </div>
    </div>
    </div>

</body>

</html>