<?php
// тест ХЕШа пароля
// $pass = 123;
// $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
// $result = password_verify($pass, $hashed_pass); // первым аргументом необходимо установить (string or int - переменную с паролем или непосредств. пароль), а вторым (хешир.. пароль) // true || false
// var_dump($result);
// exit;

//hash password
$password = 1234;
$pass = password_hash($password, PASSWORD_DEFAULT);
echo $pass . " ";

// //verify password
if (password_verify($password, $pass)) {
    echo "Пароль подтвержден";
} else {
    echo "Пароль не подтвержден ";
}
// returns true
// echo password_hash($password, PASSWORD_DEFAULT);
// $pass= 123;
// $password_confirm = 123;

// if ($pass !== $password_confirm) {
//     echo "Пароли не совпадают (пароли должны быть идентичны.)";
//     exit;
// } echo "Пароли совпадают";

?>