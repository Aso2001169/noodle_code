<?php
session_start();
if(isset($_POST['user'])){

}
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
?>

  <main>
    <table border="1" width="100%">
      <tr>
        <th>商品</th>
        <th>在庫</th>
        <th>売上金額</th>
      </tr>
      <?php
    $sql=$pdo->prepare("select count(OrderDetails.marchandise_id)as'count',merchandise_name,merchandise_stock,merchandise_cost from OrderDetails,merchandise where merchandise.merchandise_id=OrderDetails.marchandise_id GROUP BY OrderDetails.marchandise_id");
    $sql->execute();
    foreach($sql as $row){
      $sum=$row['count']*$row['merchandise_cost'];
      echo '<tr>';
      echo '<td>',$row['merchandise_name'],'</td>';
      echo '<td>',$row['merchandise_stock'],'</td>';
      echo '<td>',$sum,'</td>';
      echo '</tr>';

    }
  }
    ?>
    </table>
  </main>
</body>
</html>