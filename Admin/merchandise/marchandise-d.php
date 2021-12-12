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
$pdo=getDb();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META http-equiv="Refresh" content="3;URL=index.php">
  　　　<!-- Place your kit's code here -->
  <script src="https://kit.fontawesome.com/3239b2a89b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/top.css">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <title>Document</title>
</head>
<body>
<?php
if(isset($_SESSION['admin'])){
require '../header.php';
$sql=$pdo->prepare('delete from merchandise where merchandise_id=?');
if($sql->execute([$_GET['id']])){
  echo '<p>商品を削除しました。3秒後にページが移動します。</p>';
}else{
  echo '<p>削除できませんでした。</p>';
}
?>
  <main>
    
  </main>
  <?php
}
  ?>

</body>
</html>