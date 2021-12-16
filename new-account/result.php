<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="http://aso2001169.heavy.jp/noodle_code/about-img/icon.svg">
<title>noodle</title>
</head>
<body>
 
<?php
  $dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
  $username='LAA1290560';
  $password='green';
  $pdo=new PDO($dsn,$username,$password);
?>
 
<?php
    $sql=$pdo->prepare('insert into customer(customer_name,customer_phon,customer_address,customer_Postalcode,customer_user,customer_year,customer_mon,customer_day,customer_mail,customer_pass) values(?,?,?,?,?,?,?,?,?,?)');
     $sql->execute([$_POST['name'],$_POST['phon'],$_POST['sddress'],$_POST['postal'],$_POST['user'],$_POST['year'],$_POST['mon'],$_POST['day'],$_POST['mail'],$_POST['pass']]);
      $sql=$pdo->prepare('select * from customer where customer_user=?');
      $sql->bindValue(1,$_POST['user'], PDO::PARAM_STR);
      $sql->execute();
      // $result = $sql->fetch(PDO::FETCH_ASSOC);
      foreach($sql as $row){
      $_SESSION['customer']=['id'=>$row['id'],'user'=>$row['customer_name']];
      }
      if(isset($_SESSION['customer']['id'])){
      echo '登録しました';
       echo '<a href="http://aso2001169.heavy.jp/noodle_code/home-page/">トップページへ</a>';
 
      }else{
       echo '登録失敗<br />';
       echo '入力に不備があります<br />';
       //パターン1
      // echo 　'<button><a href="">戻る</a></button>';
      //パターン2
      echo '<a href="index.php">戻る</a>';
     }
     
  
  ?>
  
</body>
</html>