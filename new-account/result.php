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
    // require_once '../noodle-pdo.php';
    // $pdo=getDb();
    // $sql=$pdo->prepare('insert into customer(customer_name) values(?)');
    // $sql->execute([$_POST['name']]);
  ?>
    <?php
    require_once '../noodle-pdo.php';
    $pdo=getDb();
    $sql=$pdo->prepare('insert into customer(customer_name,customer_phon,customer_address,customer_Postalcode,customer_PostalcodeA,customer_user,customer_year,customer_mon,customer_day,customer_mail,customer_pass) values(?,?,?,?,?,?,?,?,?,?,?)');
    if($sql->execute([$_POST['name'],,$_POST['phon'],$_POST['sddress'],,$_POST['postal'],$_POST['user'],$_POST['year'],$_POST['mon'],$_POST['day'],$_POST['postalA'],$_POST['mail'],$_POST['pass']])){
      echo '登録しました';
    }else{
      echo '登録失敗';
    }
  ?>

</body>
</html>