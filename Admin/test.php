<?php
session_start();
?>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;
    dbname=LAA1290560-blue;charset=utf8',
    'LAA1290560',
    'green');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/login-judge.css">
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<title>Document</title>
</head>
<body>
<?php
unset($_SESSION['customer']);
echo $_POST['user'],$_POST['password'];
$sql=$pdo->prepare('select * from customer where customer_user=? and customer_pass=?');
$sql->bindValue(1,$_POST['user']);
$sql->bindValue(2,$_POST['password']);
$sql->execute();
foreach($sql as $row){
  $_SESSION['customer']=['id'=>$row['id'],'user'=>$row['customer_name']];

}



if(isset($_SESSION['customer'])){
print_r($_SESSION['customer']);
}

if(isset($_SESSION['customer'])){
  echo '成功';
    // echo '<script>location.href="http://aso2001378.boo.jp/team/index/index.php";</script>';
}else{
    echo '<p>IDまたはPWが違います</p><br>';
    echo '<p class="login"><a class="btn-border" href="login.php">ログインへ戻る</a></p>';
}
?>
</body>
</html>