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
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/about.css">
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

<title>About</title>
</head>

<!-- ヘッダー -->

<header class="noodle">
    <p>NOODLE</p>
<div class="openbtn"><span></span><span></span><span></span></div>
<nav id="g-nav">

<ul>
<li><?php echo $_SESSION['customer']['user'],'さん'; ?></li>
<li><a href="index.php">TOP</a></li>
<li><a href="#">ABOUT</a></li>
<li><a href="../cart/cart.php">CART</a></li>
<li><a href="my-page.php">MY PAGE</a></li>
</ul>
</div>
</nav>
</header>

<!-- ヘッダー -->

<body>

<!--      背景画像      -->

    <div class="haikei"></div>

<!----------------------->

<!--      背景下の文      -->
<main>
<p class="midashi">あこがれる日常生活に</p>
<div class="text">
<p class="text1">雑貨はプレゼントにも最適な上にお揃いの品や思い出の品にもなります。</p>
</div>

<!--      CONTENT      -->

<div class="line-font">
<div class="blue-line">
    <p class="content">CONTENT</p>
</div>
</div>

<div class="haikei2-position">
    <div class="haikei2-img">

    <img src="../about-img/master.png" width="650" height="700" alt="">
    </div>
    <div class="haikei2-font">
        <p>私たちは主に雑貨の販売を行っています。お客様に最高の商品をお届けするという事をモットーにしています。主な取り組みは、私生活をより良いものにする事のできる当店おすすめの雑貨を週ごとに4つ販売しております。更にはお客様が安心して購入できる様、ユーザーが迷わないシンプルなデザイン、イメージ画像を使った配送手順の説明など細部にまで力をいれております。</p>
    </div>
</div>
</main>









<!--      CHARM      -->

<div class="line-font">
    <div class="blue-line">
        <p class="content">CHARM</p>
    </div>
    </div>

<!--      01 週替わりの商品      -->


    <p class="charm-head"><span class="charm-01">週替わりの商品</span></p>
    <div class="charm-flex">
        <div class="charm-img01">
            <img src="../about-img/haikei2.jpg"  alt="">
        </div>
        <div class="charm-font">
            <p class="charm-exp"><span class="charm1">週間毎に商品が変わる</span></p>
            <p>当店おすすめの雑貨商品を1週間毎に4つほど紹介します。日常品雑貨や消耗品雑貨など幅広く取り扱っております。NOODLEは1週間ごとに雑貨のジャンルが変化し、毎週違うジャンルの雑貨商品をおすすめしております。コロナ禍で失われつある「わくわく感」を取り戻すことができます。必ずお客様の求める雑貨がここにあります</p>
      </div>
      </div>



<!--      02 安心できるサービス      -->


    <p class="charm-head"><span class="charm-02">安心できるサービス</span></p>
    <div class="charm-flex">
        <div class="charm-img01">

            <img src="../about-img/smile.png"  alt="">
        </div>
        <div class="charm-font">
            <p>トラブルがあった際は最後までサポートさせていただきます。お客様が安心して購入できる環境作りに力をいれておりますので、お問い合わせの際は迅速に対応いたします。</p>
      </div>
      </div>

    <!--      Our Story      -->

    <p class="story">Our Story</p>
    <p class="story-font">私たちは授業の一環である企業連携という授業で雑貨販売サイトを作成しました。コロナウイルスの影響で外出する事が減り、目的の買い物のついでに”偶然見つけて購入するワクワク感や商品との出会い”が減りました。そこで私たちは、わざわざ外出しなくてもここに訪れたら毎週新しい雑貨に出会える。お店に行った時のワクワク感を味わえる。という気持ちを味わってもらいたくて作成しました。
    </p>

    <!-- メンバー 一覧      -->

    <div class="line-font">
        <div class="blue-line">
            <p class="content">MEMBER</p>
        </div>
        </div>


        <!------------ 城下 ------------->
        <p class="name"><span class="post1"><br>城下 歩南</span></p>
        <div class="flex">
            <div class="item-img01">
                <img src="../about-img/leader.png" alt="あいうえお">
            </div>
            <div class="ex-font">
            <p>ニックネーム：しろしろ<br>
                好きな雑貨：文房具<br>
                ＤＢ、管理者全般担当。<br>
                NOODLEのリーダーを務めている。皆をまとめ仕事を割り当て環境作りもよく、チーム内での揉め事も1度もなくとても頑張っていた。
                マルチタスクをこなし、知識も豊富で1人ひとりの進捗状況も把握し、メンバーに適切なアドバイスをいつもだしいた。
                </p>
          </div>
          </div>

        <!------------ 鹿毛 ------------->

        <p class="name2"><span class="post2"><br>鹿毛 勇樹</span></p>
        <div class="flex">
            <div class="item-img01">
                <img src="../about-img/member01.png" alt="あいうえお">
            </div>
            <div class="ex-font">
            <p>ニックネーム：たたらには<br>
                好きな雑貨：包丁<br>
                担当：業務フロー、バックエンド、プレゼン発表<br>
                業務フローを丁寧に作成し、教えるのも上手くプレゼンも分かりやすく発表をした頼もしいメンバー。
                </p>
          </div>
          </div>

        <!------------ 小村 ------------->

        <p class="name2"><span class="post2"><br>小村 大空</span></p>
        <div class="flex">
            <div class="item-img01">
                <img src="../about-img/member02.png" alt="あいうえお">
            </div>
            <div class="ex-font">
            <p>ニックネーム：ひろ君<br>
                好きな雑貨：時計<br>
                機能一覧、皆のサポート、バックエンド担当。<br>
                やるときはやる男。仕事のスピードは早く、内容もとても良き。
                メンバーのサポートも素早く対応した。
                </p>
          </div>
          </div>

        <!------------ 末永 ------------->

        <p class="name2"><span class="post2"><br>末永 士恩</span></p>
        <div class="flex">
            <div class="item-img01">
                <img src="../about-img/member03.png" alt="あいうえお">
            </div>
            <div class="ex-font">
            <p>ニックネーム：しおん君<br>
                好きな雑貨：マグカップ<br>
                画面レイアウト、画面遷移図などデザイン、フロント担当。<br>
                授業外や与えられた仕事に全力で取り組んでいて、アイディアも豊富でとても良いデザインを作った。
                </p>
          </div>
          </div>

          <!-------------以下---------------->
          <div class="text-99">
          <p class="text-98">本ECサイトはリーダーの城下を始め鹿毛、小村、末永の4人で企画や設計、データベースの構築など全て1から作り上げました。今後とも宜しくお願いいたします。</p>
        </div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-11/js/5-1-11.js"></script>
</body>
</html>