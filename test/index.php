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
$dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
  $username='LAA1290560';
  $password='green';
  $pdo=new PDO($dsn,$username,$password);
  $sql=$pdo->prepare("select * from merchandise where id=?");
        $sql->execute(['0']);
        foreach($sql as $row){
          // ↓これだけではただURLが表示されるだけ
          echo $row['merchandise_img'];
          // イメージタグを使う必要がある
          echo '<img src="',$row['merchandise_img'],'">';

    }
?>


</body>
</html>