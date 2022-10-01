<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистраци</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <?php
        if ($_COOKIE["user"] == "") :
        ?>
        <div class="row">
            <div class="col">
                <h1> Форма регистрации </h1>
                <form action="folder2/signup.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"
                        required><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"
                        required><br>
                    <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Введите пароль"
                        required><br>
                    <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Подтвердите пароль"
                        required><br>
                    <button class="btn btn-success" type="submit">Зарегистрироваться</button><br>
                </form>
                <br>

                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
                    }
                    unset($_SESSION['message']);
                    ?>
                <?php
                    if ($_SESSION['message1']) {
                        echo '<p class="msg1"> ' . $_SESSION['message1'] . '</p>';
                    }
                    unset($_SESSION['message1']);
                    ?>


            </div>
            <div class="col">
                <h1> Форма авторизации </h1>
                <form action="folder1/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"
                        required><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"
                        required><br>
                    <button class="btn btn-success" type="submit">Авторизоваться</button>
                </form>
            </div>
        </div>
        <?php else : ?>
        <p>Привет <b><?= $_COOKIE["user"] ?></b>. Чтобы перейти в кабинет администратора нажми <a
                href="folder1/admin_cabinet.php">здесь</a>.</p>
        <p>Чтобы перейти на <b>ГЛАВНУЮ СТРАНИЦУ</b> нажми <a href="folder1/exit.php">здесь</a>.</p>
        <?php endif; ?>
    </div>


</body>

</html>