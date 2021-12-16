<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" type="image/svg+xml" href="http://aso2001169.heavy.jp/noodle_code/about-img/icon.svg">
<title>noodle</title>
</head>
<body>
  
  <header>
  <?php
echo '<a class="back" href="' . $_SERVER['HTTP_REFERER'] . '">前に戻る</a>';
?>
  </header>
  <h1>登録確認画面</h1>
  <div class="">
    <form method="post" action="result.php">
      <div class="formbox">
        <div class="label">
        

          <label for="one">氏名:</label>
        </div>
        <div>
            <?php  
            echo '<input type="text" name="name" id="one" value="',$_POST['name'],'">';
            ?>
        </div>
      </div>

      <div class="formbox">
        <div class="label">
          <label for="two">ユーザー名:</label>
        </div>
        <div>
        <?php  
            echo '<input type="text" name="user" id="two" value="',$_POST['user'],'">';
            ?>
          
        </div>
      </div>
      <div class="formbox">
        <div class="label">
          <label for="three">生年月日:</label>
        </div>
        <div class="formboxBirth">
        <?php  
            echo '<p><input type="number" name="year" id="three" min="1900" max="2022" value="',$_POST['year'],'">年</p>';
            echo '<p><input type="number" name="mon" id="three" min="1" max="12" value="',$_POST['mon'],'">月</p>';
            echo '<p><input type="number" name="day" id="three" min="1" max="31" value="',$_POST['day'],'">日</p>';
            ?>
        </div>
      </div>
        
        <!-- 追加したやつ -->
        
        <div class="h-adr">

                <div class="formbox">
                  <div class="label">
        
                  郵便番号（-を含む8桁）
                  
                  </div>
                  <div>
                  <?php  
            echo '<input type="text" name="postal" class="p-postal-code" value="',$_POST['postal'],'">';
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
            echo '<input type="text" name="sddress"  class="p-locality p-street-address" value="',$_POST['sddress'],'">';
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
            echo '<input pattern="^¥d+$" type="tel" name="phon" id="five" value="',$_POST['phon'],'">';
            ?> 
            
          </div>
        </div>

        <div class="formbox">
          <div class="label">
            <label for="six">メールアドレス:</label>
          </div>
          <div>
          <?php
            echo '<input type="email" name="mail" id="six" value="',$_POST['mail'],'">';
            ?> 
          </div>
        </div>
       

        <div class="formbox">
          <div class="label">
            <label for="seven">パスワード:</label>
          </div>
          <div>
          <?php
            echo '<input type="password" name="pass" id="seven" value="',$_POST['pass'],'">';
            ?> 
          </div>
        </div>
       
        <div class="first"></div>
        <button type="submit">登録</button>
        
    </form>
  </div>

</body>
</html>