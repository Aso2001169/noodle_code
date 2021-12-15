<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/thank-you.css">
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<title>Document</title>
</head>
<body>
<?php
//$cartcomit[]　空配列作成
$cartcomit=array();
        $dsn='mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1290560-blue;charset=utf8';
        $username='LAA1290560';
        $password='green';
        $pdo=new PDO($dsn,$username,$password);
            $sql=$pdo->prepare('select * from cart,merchandise where merchandise.merchandise_id=cart.merchandise_id and cart.customer_id=?');
            $sql->execute([$_SESSION['customer']['id']]);
            foreach ($sql as $row) {
                array_push($cartcomit,$row['merchandise_id']);
            }
            // var_dump($cartcomit);
            date_default_timezone_set('Japan');
            $date=date("Y-m-d H:i:s");
            $forcnt=count($cartcomit);
        for($i=0;$i<$forcnt;$i++){
            $dsn='mysql:host=mysql154.phy.lolipop.lan;
            dbname=LAA1290560-blue;charset=utf8';
            $username='LAA1290560';
            $password='green';
            $pdo=new PDO($dsn,$username,$password);    
            $sql = $pdo->prepare('INSERT INTO OrderDetails VALUES(null,?,?,?,?)');
            $sql->bindValue(1, $cartcomit[$i], PDO::PARAM_INT);
            $sql->bindValue(2, 1, PDO::PARAM_INT);
            $sql->bindValue(3, $date, PDO::PARAM_STR);
            $sql->bindValue(4, $_SESSION['customer']['id'], PDO::PARAM_INT);
            $sql->execute();
            $pdo = null;
            $flg=1;
        }
        if($flg==1){
            $dsn='mysql:host=mysql154.phy.lolipop.lan;
            dbname=LAA1290560-blue;charset=utf8';
            $username='LAA1290560';
            $password='green';
            $pdo=new PDO($dsn,$username,$password);
            $sql=$pdo->prepare('DELETE FROM cart WHERE customer_id=?');
            $sql->bindValue(1,$_SESSION['customer']['id'],PDO::PARAM_INT);
            $sql->execute();
            echo '<h1>ご注文ありがとうございます！</h1>';
            echo '<p>引き続き当サイトをよろしくお願いいたします。</p>';
             echo '<div class="image">';
             echo '<img src="../thank-you-img/thankyou.png" width="700" height="550" alt="写真">';
             echo '</div>';
             echo '<div class="home">';
             echo '<a href="http://aso2001169.heavy.jp/noodle_code/home-page/index.php" class="btn-border">ホームに戻る</a>';
             echo '</div>';
        }else{
            echo '<p>購入できませんでした。</p>';
        }


        ?>







    


    <!-- <div class="btn-border">
<a href="index.html">ホームに戻る</a>
    </div> -->
</body>
</html>