<?php
session_start();
include '../folder2/connect.php';
$edit_act_d = ($_GET);
$db_id = mysqli_query($connect, "SELECT * FROM `actors` WHERE `id_actor` = '$edit_act_d'");
$db_id = mysqli_fetch_assoc($db_id);
// print_r($db_id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_uc.css">
    <title>Edit Actor Data</title>

</head>

<body>
    <h2>Изменить данные пользователя</h2>
    <form action="add_actors.php" method="POST">
        <p>Имя</p>
        <input type="text" name="first_name" value="<?= $db_id['first_name'] ?>">
        <p>Фамилия</p>
        <input type="text" name="last_name" value="<?= $db_id['last_name'] ?>">
        <button type="submit">Изменить</button>
    </form>

</body>

</html>