<?php
session_start();


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="cart.css">
  <META http-equiv="Refresh" content="3;URL=http://aso2001169.heavy.jp/noodle_code/cart/cart.php">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
  <title>会員情報更新</title>
</head>
<body>
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
    echo '<p>削除しました<br>3秒後に戻ります</p>';
    $pdo = null;
?>

</body>
</html>