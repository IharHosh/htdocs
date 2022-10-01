<?php
session_start();
include '../folder2/connect.php';
    if ($_COOKIE["user"] !== "" ){
        $user = $_COOKIE["user"];
            $result_user_id = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$user' ");
                $date_user = mysqli_fetch_assoc($result_user_id);
                    ['id' => $id_user] = $date_user;
    
}
    $tel = filter_var(htmlspecialchars(trim($_POST['phone'])));

        mysqli_query($connect, "INSERT INTO `numbers`(`id_user`, `number`) VALUES ('$id_user','$tel')");
            $_SESSION['message_tel'] = "Номер телефона сохранен!";

    mysqli_close($connect);
    header('Location: user_cabinet.php');
    ?>