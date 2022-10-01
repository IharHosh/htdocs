<?php
session_start();
include 'connect.php';
$login = filter_var(htmlspecialchars(trim($_POST['login'])));
$name = filter_var(htmlspecialchars(trim($_POST['name'])));
$pass1 = filter_var(htmlspecialchars(trim($_POST['pass1'])));
$pass2 = filter_var(htmlspecialchars(trim($_POST['pass2'])));

if (mb_strlen($login) < 2 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина (логин должен содержать не менее 5 символов)";
    exit;
}       elseif (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени (имя должно содержать более 2 символов)";
    exit;
}       elseif (mb_strlen($pass1) < 3 || mb_strlen($pass1) > 6) {
    echo "Недопустимая длина пароля (введите от 3 до 6 символов)";
    exit;
}       elseif ($pass1 !== $pass2) {
    $_SESSION['message'] = "Пароли не совпадают!";
    header('Location: ../');
    exit;
}
    $pass1 = password_hash($pass1, PASSWORD_DEFAULT);
    
    mysqli_query($connect, "INSERT INTO `users`(`login`, `name`, `password`) VALUES ('$login','$name','$pass1')");
    $_SESSION['message1'] = "Регистрация прошла успешно!";

    mysqli_close($connect);
    header('Location: ../');