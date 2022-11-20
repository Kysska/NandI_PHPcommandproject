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
    <form action="./kernel/sign.php" method="POST" enctype="multipart/form-data">
        <label for="">Логин или Email</label>
        <input type="text" name = "login" placeholder="Введите логин">
        <label for="">Пароль</label>
        <input type="password" name = "password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <!-- <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p> -->
        <?php
              if($_SESSION['message']){
                echo '<p class = "msg"> ' . $_SESSION['message'] . ' </p>';
              }
              else echo '<p >  У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>! </p>';
              unset($_SESSION['message']);
        ?>
        
    </form>
</body>
</html>