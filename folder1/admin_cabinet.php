<?php
session_start();
include '../folder2/connect.php';
$actors = mysqli_query($connect, "SELECT * FROM `actors`");
$actors = mysqli_fetch_all($actors);
$number = mysqli_query($connect, "SELECT * FROM `numbers` WHERE `number`");
$number = mysqli_fetch_all($number);
$a = "ABC";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User cabinet</title>
    <link rel="stylesheet" href="../css/style_uc.css">
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>номер телефона</th>
            <th>&#9998;</th>
        </tr>
        <?php
        foreach ($actors as $value1){
            ?>
        <tr>
            <td><?= $value1[0] ?></td>
            <td><?= $value1[1] ?></td>
            <td><?= $value1[2] ?></td>
            <td></td>
            <td><a href="change_actors.php?id=<?= $value1[0] ?>">Изменить</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <h2>Добавить пользователя</h2>
    <form action="add_actors.php" method="POST">
        <p>Имя</p>
        <input type="text" name="first_name">
        <p>Фамилия</p>
        <input type="text" name="last_name">
        <button type="submit">Добавить</button>
    </form>
    <p>Чтобы перейти на <b>ГЛАВНУЮ СТРАНИЦУ</b> нажми <a href="exit.php">здесь</a>.</p>
</body>

</html>