<?php
session_start();
function getDb(){
    $dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
    $username='LAA1290560';
    $password='green';
    $pdo=new PDO($dsn,$username,$password);
    return $pdo;
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  　　　<!-- Place your kit's code here -->
  <script src="https://kit.fontawesome.com/3239b2a89b.js" crossorigin="anonymous"></script>
  <meta http-equiv="Refresh" content="3;URL=http://aso2001169.heavy.jp/noodle_code/Admin/merchandise/index.php">
  <link rel="stylesheet" href="../css/top.css">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <title>Document</title>
</head>
<body>
  <?php

  
    require '../header.php';
    $pdo=getDb();
    $sql=$pdo->prepare('update merchandise set output_flg=? where merchandise_id=?');
    $sql->execute([$_GET['flg'],$_GET['id']]);
    if($_GET['flg']=="1"){
      echo '<p>商品をECサイトに表示しました。</p>';
    }else{
      echo '<p>商品を非表示にしました<p>';
    }
    
  ?>

</body>
</html>