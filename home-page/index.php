<?php
session_start();
?>


<?php
$dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
  $username='LAA1290560';
  $password='green';
  $pdo=new PDO($dsn,$username,$password);
?>








<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style.css">
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

<link rel="icon" type="image/svg+xml" href="http://aso2001169.heavy.jp/noodle_code/about-img/icon.svg">

<title>TOP PAGE</title>
</head>
<header class="noodle">
    <p>NOODLE</p>
<div class="openbtn"><span></span><span></span><span></span></div>
<nav id="g-nav">

<ul>
<li><?php echo $_SESSION['customer']['user'],'さん'; ?></li>
<li><a href="#">TOP</a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="../cart/cart.php">CART</a></li>
<li><a href="my-page.php">MY PAGE</a></li>
</ul>
</div>
</nav>
</header>

<body>

  <!-- 背景画像 -->

    <div class="haikei"></div>
<?php
if(isset($_SESSION['customer'])){

?>
<!-- アバウト -->

  <div class="haikei2-position">
      <div class="haikei2-img">
      <img src="../index-img/haikei2.jpg" width="650" height="700" alt="">
      </div>
      <div class="haikei2-font">
          <p>私たちは主に雑貨の販売を行っております。週毎、私たちのおすすめする雑貨商品を4つほど紹介しています。生活雑貨やインテリア雑貨など他にも幅広くとり扱っておりますので必ずお客様の求める商品がここにあります。</p>
          <p class="learn-position"><a href="about.php" class="learn">Learn more ⇀</a></p>
      </div>
  </div>


<!-- キッチン雑貨 -->


  <p class="name"><span class="item-var"><br>GOODS</span></p>

<ul class="flex01">
  <li><img src="../index-img/haikei3-1.jpg"  alt="インテリア雑貨"></li>
  <li><img src="../index-img/haikei3-2.jpg"  alt="キッチン雑貨"></li>
  <li><img src="../index-img/haikei3-3.jpg"  alt="生活雑貨"></li>
</ul>


<!-- おすすめ雑貨紹介 -->


<div class="items">ITEMS</div>
<div class="line">
  <h2>雑貨紹介</h2>
  <ul>
  <?php
  $sql=$pdo->prepare("select merchandise_name from merchandise where output_flg=?");
        $sql->execute(['1']);
        foreach($sql as $row){
            echo '<li>',$row['merchandise_name'],'</li>';
    }
  ?>
</ul>
</div>


<!-------商品------->

<div class="over2"></div>

<?php
  $i=1;
  $sql=$pdo->prepare("select * from merchandise where output_flg=?");
        $sql->execute(['1']);
        foreach($sql as $row){
          echo '<section>';
          echo '<p class="item-number01">0',$i,'</p>';
            echo '<p class="item-name01">',$row['merchandise_name'],'</p>';
            echo '<div class="flex">';
            echo '<div class="item-img01">';
            echo '<img src="',$row['merchandise_img'],'">';
            echo '</div>';
            echo '<div class="ex-font">';
            echo $row['merchandise_info_top'];
            echo '<p class="price01"><span class="JPY01">';
            echo $row['merchandise_cost'];
            echo '</span>';
            echo '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="view01-position">';
            echo '<a class="view01" name="cart" href="../cart/cart-insert.php?goodsid=',$row['merchandise_id'],'">カートに入れる</a>';
            echo '</div>';
          echo '</section>';
          $i++;
        }


  ?>

<!------- 注文の流れ ------->

<div class="over2"></div>


  <p class="name"><span class="order-var"><br>Order Flow</span></p>

<ul class="flex01">
  <li><img src="../index-img/order-1.jpg"  alt=""></li>
  <li><img src="../index-img/order-2.jpg"  alt=""></li>
  <li><img src="../index-img/order-3.jpg"  alt=""></li>
</ul>


<!------- お問い合わせ ------->

<footer class="footer">
  <p><a href="number2.php"><span class="view01">お問い合わせ</span></a></p>
</footer>






<!-- ハンバーハーメニュー -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-11/js/5-1-11.js"></script>
<!----------------------->
<?php
      }else{
        echo '<a class="loginbtn" href="http://aso2001169.heavy.jp/noodle_code/new-account/login.php">このサイトはログインしてからご覧ください</a>';
      }
      ?>
</body>
</html>



