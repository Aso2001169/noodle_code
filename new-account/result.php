<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;
                                dbname=LAA1290641-noodls;charset=utf8',
    'LAA1290641',
    'sinon985');


  $sql=$pdo->prepare('select * from customer where customer_user=?');
  $sql->execute([$_POST['user']]);
if(empty($sql->fetchAll())) {
    if (isset($_SESSION['customer'])) {
    } else {
        $sql = $pdo->prepare('insert into customer values(null,?,?,?,?)');
        $sql->execute([
            $_REQUEST['name'], $_REQUEST['address'],
            $_REQUEST['login'], $_REQUEST['password']]);
        echo 'お客様情報を登録しました。';
    }
}else {
    echo 'ログイン名がすでに使用されていますので、変更してください';
}
?>
</body>
</html>