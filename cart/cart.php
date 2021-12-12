<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cart.css">
    <title>カート</title>
</head>

<body>
<button type="button">戻る</button>
</form>
<!--<div style="line-height:1em;">
    <h2 style="text-align: center">Cart</h2>-->
<div class="cart-center">
    <h2>Cart</h2>
    <div class="a">
        <?php
        $dsn='mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1290560-blue;charset=utf8';
        $username='LAA1290560';
        $password='green';
        $pdo=new PDO($dsn,$username,$password);
        $sql=$pdo->prepare("select * from cart where merchandise_id=?");
        $sql->execute([$_GET['goodsoid']]);

        //ログインしているユーザIDはセッションから取得
        //ユーザIDをキーにしてカートテーブルから読み込む
        $sql1='select * from cart where customer_id=?';
        $sql2='select * from merchandise where merchandise_id=?';
        $sqlval1 = $pdo->prepare($sql1);
        $sqlval1->bindValue(1,$_SESSION['customer']['id']);  //ユーザIDセッションから受ける
        $sqlval1->execute();
        //カート内の商品IDを配列へ保管
        foreach ($sqlval1 as $row){
            $merchandiseid[]=$row['merchandise_id'];
        }
        //配列内の商品IDを元に商品テーブルからSELECTし、1件ずつの商品情報を取得し表示する
        for($i=0;$i<count($merchandiseid);$i++) {
            echo $merchandiseid[$i];
            $sqlval2 = $pdo->prepare($sql2);
            $sqlval2->bindValue(1, $merchandiseid[$i]);  //777としているのはユーザIDセッションから受ける
            $sqlval2->execute();
            foreach ($sqlval2 as $row) {
                echo '商品名　', $row['merchandise_name'];
                echo '<br>';
                echo '商品価格', $row['merchandise_cost'], '円';
                echo '<br>';
                echo '<img src="', $row['merchandise_img'], '">';
            }
            echo '<a href="cart-delete.php?customer_id=777&merchandise_id=', $row['merchandise_id'], '">消去</a>';
            echo '<br>';
            echo '<br>';
        }

        $pdo = null;
        ?>
    </div>
</div>
<div class="cart-button">
<form action="thank-you.php" method="post" >
    <input type="submit"  value="購入">
</form>
</div>
</body>
</html>