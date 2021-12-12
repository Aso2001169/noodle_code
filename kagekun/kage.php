<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
  $mid=$_GET['id'];
  $dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
  $username='LAA1290560';
  $password='green';
  $pdo=new PDO($dsn,$username,$password);
?>
<table>
  <tr>
    <th>商品名</th>
    <th>値段</th>
    <th>簡易説明</th>
    <th>ヘッダー２</th>
    <th>ヘッダー2</th>
    <th>説明1</th>
    <th>説明2</th>
    <th>写真</th>
  </tr>
  <?php
  $sql=$pdo->prepare("select * from merchandise where merchandise_id=$mid");
        $sql->execute(['0']);
        foreach($sql as $row){
          
          echo '<tr>';
            echo '<td>',$row['merchandise_name'],'</td>';
            echo '<td>',$row['merchandise_cost'],'</td>';
            echo '<td>',$row['merchandise_info_top'],'</td>';
            echo '<td>',$row['merchandise_Heading'],'</td>';
            echo '<td>',$row['merchandise_Heading2'],'</td>';
            echo '<td>',$row['merchandise_info1'],'</td>';
            echo '<td>',$row['merchandise_info2'],'</td>';
          echo '<td><img src="',$row['merchandise_img'],'"></td>';
          echo '</tr>';


    }
  ?>
  </table>

</body>
</html>