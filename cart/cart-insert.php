<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="cart.css">
  <title>カート</title>
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

$sql = $pdo->prepare('INSERT INTO cart VALUES(null,?,?,1)');
    $sql->bindValue(1, 777, PDO::PARAM_STR);
    $sql->bindValue(2, 888, PDO::PARAM_STR);

    $sql->execute();
    echo '登録しました';
    $pdo = null;
?>

</body>
</html>