<?php
session_start();
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
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <link rel="stylesheet" href="../new-account/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">
  <META http-equiv="Refresh" content="3;URL=http://aso2001169.heavy.jp/noodle_code/new-account/login.php">

  <title>Document</title>
</head>
<body>
  <?php
  unset($_SESSION['customer']);
  ?>
  <p>ログアウトしました。3秒後にログインページに戻ります。</p>
</body>
</html>