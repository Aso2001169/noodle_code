<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3239b2a89b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <title>カート</title>
</head>

<body>
<a class="btn" href="http://aso2001169.heavy.jp/noodle_code/cart/cart.php">戻る</a>
</form>
<!--<div style="line-height:1em;">
    <h2 style="text-align: center">Cart</h2>-->
    <h2 class="h2name">購入商品確認</h2>

        <?php
        $totalAmount=0;
        $dsn='mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1290560-blue;charset=utf8';
        $username='LAA1290560';
        $password='green';
        $pdo=new PDO($dsn,$username,$password);
            $sql=$pdo->prepare('select * from cart,merchandise where merchandise.merchandise_id=cart.merchandise_id and cart.customer_id=?');
            $sql->execute([$_SESSION['customer']['id']]);
            foreach ($sql as $row) {
              $totalAmount=$totalAmount+$row['merchandise_cost'];
            }
        $pdo = null;
        ?>
        <div class="totalAmount">
          <table>
            <tr>
              <th><p>商品の小計</p></th>
              <td><?php echo $totalAmount; ?></td>
            </tr>
            <tr>
              <th><p>配送料</p></th>
              <td>０</td>
            </tr>
            <tr>
              <th><p>ご請求額</p></th>
              <td><?php echo $totalAmount; ?></td>
            </tr>
          </table>
        </div>

        <div class="cart-button">
            <a href="thank-you.php">注文確定</a>
        </div>
        <h2 class="h2name">発送先住所</h2>

        <div class="postal">
          <?php
          $dsn='mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1290560-blue;charset=utf8';
        $username='LAA1290560';
        $password='green';
        $pdo=new PDO($dsn,$username,$password);
            $sql=$pdo->prepare('select customer_address,customer_Postalcode from customer where id=?');
            $sql->execute([$_SESSION['customer']['id']]);
            foreach ($sql as $row) {
              echo '<p><i class="fas fa-street-view"></i>',$row['customer_Postalcode'],'</p>';
              echo '<p>',$row['customer_address'],'</p>';
            }
        $pdo = null;
        ?>
        </div>
        <h2 class="h2name">発送予定商品の詳細</h2>
        <div class="postal">
          <ul>
          <?php
        $dsn='mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1290560-blue;charset=utf8';
        $username='LAA1290560';
        $password='green';
        $pdo=new PDO($dsn,$username,$password);
            $sql=$pdo->prepare('select * from cart,merchandise where merchandise.merchandise_id=cart.merchandise_id and cart.customer_id=?');
            $sql->execute([$_SESSION['customer']['id']]);
            foreach ($sql as $row) {
              echo '<li>',$row['merchandise_cost'],'円　',$row['merchandise_name'],'</li>';
            }
        $pdo = null;
        ?>

            
          </ul>
        </div>

</body>
</html>