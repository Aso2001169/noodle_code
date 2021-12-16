<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <META http-equiv="Refresh" content="3;URL=http://aso2001169.heavy.jp/noodle_code/home-page/index.php">
  <link rel="stylesheet" href="cart.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/thank-you.css">

  <title>カート</title>
</head>
<body>
<button type="button"><a href="http://aso2001169.heavy.jp/noodle_code/home-page/index.php">戻る</a></button>
<div style="line-height:1em;">
  <h2 style="text-align: center">カート</h2></div>
    <?php
    $dsn='mysql:host=mysql154.phy.lolipop.lan;
    dbname=LAA1290560-blue;charset=utf8';
    $username='LAA1290560';
    $password='green';
    $pdo=new PDO($dsn,$username,$password);
    $sql=$pdo->prepare('select * from cart where customer_id=? and merchandise_id=?');
    $sql->execute([$_SESSION['customer']['id'],$_GET['goodsid']]);
    foreach ($sql as $row) {
    }
    if(isset($row)){
          echo '<p>すでにカートに入っている商品です</p>';
          echo '<div class="image">';
          echo '<img src="http://aso2001169.heavy.jp/noodle_code/about-img/not-m.svg" width="700" height="550" alt="写真">';
          echo '</div>';

    }else{
          $sql = $pdo->prepare('INSERT INTO cart VALUES(null,?,?,1)');
          $sql->bindValue(1, $_SESSION['customer']['id'], PDO::PARAM_STR);
          $sql->bindValue(2, $_GET['goodsid'], PDO::PARAM_STR);
          $sql->execute();
          echo '<p>カートに入れました。引き続きお買い物をお楽しみください</p>';
          echo '<div class="image">';
          echo '<img src="http://aso2001169.heavy.jp/noodle_code/about-img/not-m.svg" width="700" height="550" alt="写真">';
          echo '</div>';
          $pdo = null;
    }
    ?>
</div>
</body>
</html>