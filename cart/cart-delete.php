<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="cart.css">
  <title>削除</title>
</head>
<body>
<button type="button">戻る</button>
<div style="line-height:1em;">
  <h2 style="text-align: center">カート</h2></div>
<?php
$dsn='mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1290560-blue;charset=utf8';
$username='LAA1290560';
$password='green';
$pdo=new PDO($dsn,$username,$password);

$sql=$pdo->prepare('DELETE FROM cart WHERE customer_id=? and merchandise_id=?');
$sql->bindValue(1,$_GET['customer_id'],PDO::PARAM_INT);
$sql->bindValue(2,$_GET['merchandise_id'],PDO::PARAM_INT);
$sql->execute();

    $sql->execute();
    echo '削除しました';
    $pdo = null;
?>

</body>
</html>