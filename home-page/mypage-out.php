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
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <link rel="stylesheet" href="../new-account/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">
  <META http-equiv="Refresh" content="3;URL=http://aso2001169.heavy.jp/noodle_code/home-page/index.php">

  <link rel="icon" type="image/svg+xml" href="http://aso2001169.heavy.jp/noodle_code/about-img/icon.svg">
<title>noodle</title>
</head>
<body>
<?php
$sql=$pdo->prepare('update customer set customer_name=?, customer_phon=?, customer_address=?, customer_Postalcode=?, customer_user=?, customer_mail=?, customer_pass=? where id=?');
if($sql->execute([$_POST['name'],$_POST['phon'],$_POST['sddress'],$_POST['postal'],$_POST['user'],$_POST['mail'],$_POST['pass'],$_SESSION['customer']['id']])){
  echo '<p>会員情報を更新しました。3秒後に戻ります</p>';
}else{
  echo '<p>会員情報を更新できませんでした。再度お試しください。3秒後に戻ります</p>';
}
?>
  <?php
  ?>
</body>
</body>
</html>
