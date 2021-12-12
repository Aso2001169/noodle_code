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
    <div class="marchandise-form">
      <form method="post" action="merchandise-output.php">
        <!-- *商品名 -->
        <div class="form-cnt">
          <label for="one"><p>商品名</p></label>
          <input id="one" type="text" name="merchandise_name">
        </div>
        <!-- *値段 -->
        <div class="form-cnt">
          <label for="one"><p>値段</p></label>
          <input id="one" type="number" name="merchandise_cost">
        </div>
        <!-- *値段 -->
        <div class="form-cnt">
          <label for="one"><p>在庫</p></label>
          <input id="one" type="number" name="merchandise_stock">
        </div>
        <!-- *簡易説明 -->
        <div class="form-cnt">
          <label for="one"><p>簡易説明</p></label>
          <input id="one" type="text" name="merchandise_info_top">
        </div>
        
        <!-- *写真アップロード -->
        <div class="form-cnt">
          <label for="one"><p>写真アップロード1</p></label>
          <input type="text" name="example" value="http://aso2001169.heavy.jp/noodle_code/index-img/">  
        </div>
        
        <button type="submit">商品を追加する</button>
      </form>
    </div>
  </main>
  <?php
}
  ?>
</body>
</html>