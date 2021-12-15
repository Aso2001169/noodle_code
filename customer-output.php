<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Sample Programs</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;
                                dbname=LAA1290641-noodls;charset=utf8',
    'LAA1290641',
    'sinon985');
   // ログインページから値を受け取ってたら
if (isset($_POST['login'])) {
    //前回のアカウントをログアウト
    unset($_SESSION['customer']);
    //一致するデータがあるか
    $sql=$pdo->prepare('select * from customer where address=? and pass=?');
    $sql->execute([$_POST['login'],$_POST['password']]);
    //検索結果をセッションに挿入
    foreach ($sql as $row) {
        $_SESSION['customer'] = [
            'id' => $row['customer_No'], 'name' => $row['customer_id']
        ];
    }
    // ログインに成功してたらトップページに飛ぶ
    if(isset($_SESSION['customer'])){
 echo '<script type="text/javascript">location.href=\'../top/top.php\'</script>';
    }else{
        //ログインに失敗してたら
        echo '<a href=""></a>';
    }
}
?>
</body>
</html>