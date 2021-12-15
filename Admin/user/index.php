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
    <p>会員管理画面です</p>
    <table border="1" width="100%">
    <tr>
        <th>会員ID
        </th>
        <th>ユーザ名</th>
        <th>本名</th>
        <th>パスワード</th>
      </tr>

    <?php
    $sql=$pdo->prepare('select id,customer_name,customer_user,customer_pass from customer');
    $sql->execute();
    foreach($sql as $row){
      echo '<tr>';
      echo '<td>',$row['id'],'</td>';
      echo '<td>',$row['customer_user'],'</td>';
      echo '<td>',$row['customer_name'],'</td>';
      echo '<td>',$row['customer_pass'],'</td>';
      echo '</tr>';

    }
  }
    ?>
    </table>

  </main>
</body>
</html>