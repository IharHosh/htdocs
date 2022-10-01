<?php
session_start();
include '../folder2/connect.php';
$first_name = filter_var(htmlspecialchars(trim($_POST['first_name'])));
$last_name = filter_var(htmlspecialchars(trim($_POST['last_name'])));

mysqli_query($connect, "INSERT INTO `actors`(`first_name`, `last_name`) VALUES ('$first_name','$last_name')");
    mysqli_close($connect);
    header('Location: admin_cabinet.php');

?>