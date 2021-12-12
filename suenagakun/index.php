<?php

  $dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
  $username='LAA1290560';
  $password='green';
  $pdo=new PDO($dsn,$username,$password);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <header>

  </header>
  <div class="Blank">

  </div>
  <h1>ITEMS</h1>
  <div class="topBox">
    <h2>雑貨紹介</h2>
    <ul>
    <?php
  $sql=$pdo->prepare("select merchandise_name from merchandise where output_flg=?");
        $sql->execute(['1']);
        foreach($sql as $row){
            echo '<li>',$row['merchandise_name'],'</li>';
    }
  ?>
    </ul>
  </div>
  <?php
  $i=1;
  $sql=$pdo->prepare("select * from merchandise where output_flg=?");
        $sql->execute(['1']);
        foreach($sql as $row){
          echo '<section>';
            echo '<p class="cnt">0',$i,'</p>';
            echo '<div class="item">';
            echo '<div class="itemleft">';
            echo '<p>',$row['merchandise_name'],'</p>';
            echo '<p class="itemInfo">',$row['merchandise_info_top'],'</p>';
            echo '<p class="cost">',$row['merchandise_cost'],'</p>';
            echo '<a class="cartin" href="cart-insert.php?goodsid=',$row['merchandise_id'],'">カートに入れる</a>';
            echo '</div>';
            echo '<div class="itemright">';
            echo '<img src="',$row['merchandise_img'],'">';
            echo '</div>';
            echo '</div>';
          echo '</section>';
          $i++;
        }

    
  ?>

  <!-- <section>
      <p class="cnt">01</p>
    <div class="item">
      <div class="itemleft">
        <h2>スチールタワーパネル縦型</h2>
        <p class="itemInfo">あああああああああああああああああああああああああああああああああああ</p>
        <p class="cost">3,960</p>
        <a class="cartin" href="">カートに入れる</a>
      </div>
      <div class="itemright">
        <img src="">
      </div>
    </div>
  </section> -->
</body>
</html>