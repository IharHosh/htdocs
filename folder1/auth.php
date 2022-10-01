<?php
session_start();
include '../folder2/connect.php';

$login = filter_var(htmlspecialchars(trim($_POST['login'])));
$pass = filter_var(htmlspecialchars(trim($_POST['pass'])));

$result_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' ");
$date_user_DB = mysqli_fetch_assoc($result_user);

// print_r($date_user_DB);
// exit;

if (mysqli_num_rows($result_user) !== 1) {
    echo "Пользователь с именем " . $login . " не был ранее зарегистрирован! "; 
    echo "Введите корректные данные или зарегистрируйтесь!";
    exit;
} elseif (password_verify($pass, $date_user_DB['password']) !== true) {
    echo "Вы ввели неверный пароль!";
    exit;
}
setcookie("user", $login, time() + 60 * 60 * 24, '/');

mysqli_close($connect);
header('Location: /');