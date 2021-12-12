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
  <link rel="stylesheet" href="../css/top.css">
  <link rel="stylesheet" href="../css/form.css">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <title>Document</title>
</head>
<body>
<?php
if(isset($_SESSION['admin'])){
require '../header.php';
?>

  <main>
    <?php
    $id=$_GET['id'];
  $pdo=getDb();
  $sql=$pdo->prepare('select * from merchandise where merchandise_id=?');
  $sql->execute([$id]);
  foreach($sql as $row){
    echo ' <div class="marchandise-form">';
    echo '<form method="post" action="merchandise-update-output.php">';
    echo '<div class="form-cnt">';
    echo '<label for="one"><p>商品名</p></label>';
    echo '<input id="one" type="text" name="merchandise_name" value="',$row['merchandise_name'],'">';
    echo '</div>';
    echo '<div class="form-cnt">';
    echo '<label for="one"><p>値段</p></label>';
    echo '<input id="one" type="number" name="merchandise_cost" value="',$row['merchandise_cost'],'">';
    echo '</div>';
    echo '<div class="form-cnt">';
    echo '<label for="one"><p>在庫</p></label>';
    echo '<input id="one" type="number" name="merchandise_stock" value="',$row['merchandise_stock'],'">';
    echo '</div>';
    echo '<div class="form-cnt">';
    echo '<label for="one"><p>簡易説明</p></label>';
    echo '<input id="one" type="text" name="merchandise_info_top" value="',$row['merchandise_info_top'],'">';
    echo '</div>';
    echo '<div class="form-cnt">';
    echo '<label for="one"><p>写真アップロード1</p></label>';
    echo '<input type="text" name="example" value="',$row['merchandise_img'],'">';
    echo '</div>';
  }
echo '        <button type="submit" name="mid" value="',$id,'">商品を更新する</button>
';

  }
    ?>
      </form>
    </div>
  </main>
</body>
</html>