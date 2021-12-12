<?php
session_start();
if(isset($_POST['user'])){
unset($_SESSION['admin']);

function getDb(){
  $dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
  $username='LAA1290560';
  $password='green';
  $pdo=new PDO($dsn,$username,$password);
  return $pdo;
}
$pdo=getDb();
$sql=$pdo->prepare('select * from Administrator where user_id=? and pass=?');
$sql->execute([$_POST['user'],$_POST['pass']]);
foreach($sql as $row){
  $_SESSION['admin']=[
    'id'=>$row['id'],'name'=>$row['name']
  ];
}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  　　　<!-- Place your kit's code here -->
  <script src="https://kit.fontawesome.com/3239b2a89b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/top.css">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <title>Document</title>
</head>
<body>
  <?php

  if (isset($_SESSION['admin'])){

  require 'header.php';
?>
  <div id="app">
      <div class="topmenu">
        <nav>
          <ul class="header-menu">
            <li
            v-for="(item,i) in menus":key="i" class="topmenu-a"><a :href="item.path">{{item.label}}</a></li>
          </ul>
        </nav>
      </div>
   <img src="../index-img/noaccount.svg" class="noaccount">

  </div>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="./script/script.js"></script>
  <?php
  }else{
    echo '<p style="text-align: center">残念ながらアカウントが見つかりませんでした。再度お試しください。</p>';
    echo '<a href="http://aso2001169.heavy.jp/noodle_code/Admin/login.html" class="commonButton">ログインページに戻る</a>';
    echo '<img src="../index-img/noaccount.svg" class="noaccount">';

}
  ?>
</body>
</html>