<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <title>カート</title>
</head>

<body>
<a class="btn" href="http://aso2001169.heavy.jp/noodle_code/home-page/index.php">戻る</a>
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
            $sql=$pdo->prepare('select * from cart,merchandise where merchandise.merchandise_id=cart.merchandise_id and cart.customer_id=?');
            $sql->execute([$_SESSION['customer']['id']]);
            foreach ($sql as $row) {
                echo '<div class="merchandise">';
                echo '<p class="merchandiseName">',$row['merchandise_name'],'</p>';
                echo '<div class="imgbox"><img class="mimg" src="', $row['merchandise_img'], '"></div>';
                echo '<p class="merchandiseCost">',$row['merchandise_cost'],'</p>';
                echo '<a class="debtn" href="cart-delete.php?customer_id=',$_SESSION['customer']['id'],'&merchandise_id=', $row['merchandise_id'], '">消去</a>';
                echo '</div>';
            }
        $pdo = null;
        ?>
    </div>
</div>
<div class="cart-button">
    <a href="ready.php">購入</a>
</div>
</body>
</html>