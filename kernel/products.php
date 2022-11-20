<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../css/product.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Главная страница</title>
</head>
<body>
    <header class="p-3 text-bg-dark">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <nav>
      <ol class="nav">
        <li class="nav_item"><a href="#">Главная страница</a></li>
        <li class="nav_item" aria-current="page"><a href="#">Контакты</a></li>
      </ol>
    </nav>
    </div>
    </header>
</body>
</html>
<?php
require_once 'connect.php';
$prepare = $connect->query("SELECT * FROM products WHERE tobe = 1");
$row = $prepare->fetchAll();?>
<div class="card-group" style = "display:flex; justify-content: center;">
<?foreach($row as $item):?>
  <div class="card" style="max-width: 12rem;">
    <img src="../imageanimals/<?=$item['image']?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" href = "info_product.php?"><?=$item['title']?></h5>
      <a href="info_product.php?id=<?=$item['id']?>">aaaaa</a>
      <div class="cmp-btn"><button class="butt-v1">Добавить в заявку</button></div>
       <span class="product-price">Цена: <?=$item['price']?></span>
    </div>
  </div>
<?endforeach?>
</div> 