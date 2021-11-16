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
    require_once 'noodle-pdo.php';
    $pdo=getDb();
    $pdo->prepare('insert into customer(customer_name,customer_phon,customer_address,customer_Postalcode,customer_PostalcodeA,customer_user,customer_year,customer_mon,customer_day,customer_mail,customer_pass) values()')
  ?>
</body>
</html>