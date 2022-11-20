<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$id = $_GET['id'];
require_once 'connect.php';
$prepare = $connect->prepare("SELECT * FROM products WHERE `id` = ?");
$prepare->execute([$id]);
$row = $prepare->fetch(PDO::FETCH_ASSOC);;
?>
<div class="card-group" style = "display:flex; justify-content: center;">
  <div class="card" style="max-width: 12rem;">
    <img src="../imageanimals/<?=$row['image']?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" href = "info_product.php?"><?=$row['title']?></h5>
      <div class="cmp-btn"><button class="butt-v1">Добавить в заявку</button></div>
       <span class="product-price"><?=$row['price']?></span>
    </div>
  </div>
</div> 
<p>
<?=$row['description']?>
</p>