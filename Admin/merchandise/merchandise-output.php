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
  <meta http-equiv="Refresh" content="3;URL=http://aso2001169.heavy.jp/noodle_code/Admin/merchandise/index.php">


  　　　<!-- Place your kit's code here -->
  <script src="https://kit.fontawesome.com/3239b2a89b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/top.css">
  <link rel="stylesheet" href="../css/form.css">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <title>Document</title>
</head>
<body>
<?php
if(isset($_SESSION['admin'])){
require '../header.php';
$pdo=getDb();
$sql=$pdo->prepare('insert into merchandise(merchandise_stock,merchandise_name,merchandise_cost,merchandise_info_top,merchandise_img) values(?,?,?,?,?)');
if($sql->execute([$_POST['merchandise_stock'],$_POST['merchandise_name'],$_POST['merchandise_cost'],$_POST['merchandise_info_top'],$_POST['example']])){
  echo '<p>商品を追加しました。3秒後に戻ります</p>';
}else{
  echo '<p>商品を追加できませんでした。再度お試しください。3秒後に戻ります</p>';
}
?>
  <?php
}
  ?>
</body>
</html>