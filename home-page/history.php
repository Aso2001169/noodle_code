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
  <link rel="icon" type="image/svg+xml" href="http://aso2001169.heavy.jp/noodle_code/about-img/icon.svg">
<title>noodle</title>
</head>
<body>
  <header>
    <a class="back" href="./">戻る</a>
  </header>
  <h1>購入履歴</h1>
<center>
    <table>

    <?php
      $sql=$pdo->prepare("select * from OrderDetails,merchandise where merchandise.merchandise_id=OrderDetails.marchandise_id and mUserId=?");
      $sql->execute([$_SESSION['customer']['id']]);
      foreach($sql as $row){

        echo '<tr>';
        echo '<td>',$row['orderdate'],'</td>';
        echo '<td>',$row['merchandise_name'],'</td>';
        echo '</tr>';
      }
    ?>

    </table>

        <div class="first"></div>
        
        


        </center>
</body>
</html>