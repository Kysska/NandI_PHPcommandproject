<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="./css/login.css">
    <title>Document</title>
</head>
<body>
    <form action="./kernel/reg.php" method="POST" enctype="multipart/form-data">
        <label for="">ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя">
        <label for="">Логин</label>
        <input type="text" name = "login" placeholder="Введите логин">
        <label for="">Email</label>
        <input type="email" name = "email" placeholder="Введите свою почту">
        <label for="">Пароль</label>
        <input type="password" name = "password" placeholder="Введите пароль">
        <label for="">Подтвержение пароля</label>
        <input type="password" name = "password_confirm" placeholder="Введите пароль ещё раз">
        <button type = "submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/index.php">войдите</a>!
        </p>
            <?php
              if($_SESSION['message']){
                echo '<p class = "msg"> ' . $_SESSION['message'] . ' </p>';
              }
              unset($_SESSION['message']);
            ?>
    </form>
</body>
</html>