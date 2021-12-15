<?php
session_start();
$dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
  $username='LAA1290560';
  $password='green';
  $pdo=new PDO($dsn,$username,$password);
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <link rel="stylesheet" href="../new-account/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <header>
    <a class="back" href="./">戻る</a>
  </header>
  <h1>マイページ<br>会員登録内容更新</h1>
  <?php
    $sql=$pdo->prepare("select * from customer where id=?");
    $sql->execute([$_SESSION['customer']['id']]);
    foreach($sql as $row){


  ?>
  <div class="">
    <form method="post" action="mypage-out.php">
      <div class="formbox">
        <div class="label">
        

          <label for="one">氏名:</label>
        </div>
        <div>
          <?php
          echo '<input type="text" name="name" id="one" value="',$row['customer_name'],'">';
          ?>
        </div>
      </div>

      <div class="formbox">
        <div class="label">
          <label for="two">ユーザー名:</label>
        </div>
        <div>
        <?php
          echo '<input type="text" name="user" pattern="^[0-9a-zA-Z]+$" id="two" value="',$row['customer_user'],'">';
          ?>
        </div>
      </div>
        <div id="app">
          <div class="formbox">
            <div class="label">
              <label for="seven">パスワード（4文字以上32文字以下）:</label>
            </div>
            <div>
              <?php
              echo '<input v-model="tanka" type="password" name="pass" id="seven" maxlength="32" pattern="^[0-9]+$" minlength="4" value="',$row['customer_pass'],'">';
              ?>
            </div>
          </div>
        </div>
        <div class="h-adr">

<div class="formbox">
  <div class="label">
    <span class="p-country-name"style="display:none;">Japan</span>

    郵便番号（-を含む8桁） 
  </div>
  <div>
    <?php
    echo '<input type="text" name="postal" class="p-postal-code" size="8" maxlength="8" value="',$row['customer_Postalcode'],'">';
    ?>
  </div>
</div>
  
  <div class="formbox">
    <div class="label">
      <!-- <span class="p-country-name"style="display:none;">Japan</span>

      郵便番号（-を除く7桁）  -->
    </div>
    <div>
      <?php
      echo '<input type="text" name="sddress"  class="p-locality p-street-address p-extended-address" value="',$row['customer_address'],'">';
      ?>

    </div>
  </div>

</div>




<!-- </div> -->

<div class="formbox">
<div class="label">
<label for="five">電話番号:</label>
</div>
<div>
  <?php
echo '<input type="tel" pattern="^[0-9]+$" name="phon" id="five" value="',$row['customer_phon'],'">';
?>
</div>
</div>

<div class="formbox">
<div class="label">
<label for="six">メールアドレス:</label>
</div>
<div>
  <?php
echo '<input type="email" name="mail" id="six" value="',$row['customer_mail'],'">';
?>
</div>
</div>

        <?php
    }
        ?>
        <div class="first"></div>
        
        


        <button type="submit">更新</button>
        <button><a href="logout.php">ログアウト</a></button>
        
    </form>
  </div>
</body>
</html>