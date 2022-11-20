<?php
   session_start();
   require_once 'connect.php';
   $login = $_POST['login'];
   $password = md5($_POST['password']);
   $check_user = $connect->prepare("SELECT * FROM users WHERE (`login` = :login OR `email` = :login)  AND `password` = :password");
   $check_user->execute([
    'login' => $login, 
    'password' => $password]);
//    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if($check_user->rowCount()){
      header('Location: ../index.php');
      $user = $check_user->fetch(PDO::FETCH_ASSOC);

      $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "full_name" => $user['full_name'],
        "email" => $user['email']
      ];
      header('Location: ../profile.php');
   }
   else{
    $_SESSION['message'] = "Неверный логин или пароль";
    header('Location: ../index.php');
   }
?>
