<?php
   $host = '10.0.157.46';
   $db = 'store';
   $connect = new PDO('mysql:host=10.0.157.46;dbname=store;charset=utf8','root','');  
    // $connect = mysqli_connect('10.0.157.46', 'root', '', 'store');
    if(!$connect){
        die('Error connect to db');
    }