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
    <a class="back" href="login.php">戻る</a>
  </header>
  <h1>新規登録</h1>
  <div class="">
    <form method="post" action="new2-out.php">
      <div class="formbox">
        <div class="label">
        

          <label for="one">氏名:</label>
        </div>
        <div>
          <input type="text" name="name" id="one">
        </div>
      </div>

      <div class="formbox">
        <div class="label">
          <label for="two">ユーザー名:</label>
        </div>
        <div>
          <input type="text" pattern="^[0-9a-zA-Z]+$" name="user" id="two">
        </div>
      </div>
      <div class="formbox">
        <div class="label">
          <label for="three">生年月日:</label>
        </div>
        <div class="formboxBirth">
          <p><input type="number" name="year" id="three" min="1900" max="2022" >年</p>
          <p><input type="number" name="mon" id="three" min="1" max="12" >月</p>
          <p><input type="number" name="day" id="three" min="1" max="31">日</p>
        </div>
      </div>
        
        <!-- 追加したやつ -->
        
        <div class="h-adr">

                <div class="formbox">
                  <div class="label">
                    <span class="p-country-name"style="display:none;">Japan</span>
          
                    郵便番号（-を含む8桁） 
                  </div>
                  <div>
                    <input type="text" name="postal" class="p-postal-code" size="8" maxlength="8">
                  </div>
                </div>
                  
                  <div class="formbox">
                    <div class="label">
                      <!-- <span class="p-country-name"style="display:none;">Japan</span>
            
                      郵便番号（-を除く7桁）  -->
                    </div>
                    <div>
                      <input type="text" name="sddress"  class="p-locality p-street-address p-extended-address">
  
                    </div>
                  </div>

                </div>
          
          
          
          
          <!-- </div> -->
        
        <div class="formbox">
          <div class="label">
            <label for="five">電話番号:</label>
          </div>
          <div>
            <input type="tel" pattern="^¥d+$" name="phon" id="five">
          </div>
        </div>

        <div class="formbox">
          <div class="label">
            <label for="six">メールアドレス:</label>
          </div>
          <div>
            <input type="email" name="mail" id="six">
          </div>
        </div>
       
        <div id="app">
          <div class="formbox">
            <p  v-if="isInvalidKei" class="kakuninyou">パスワードが一致しません</p>
            <div class="label">
              <label for="seven">パスワード（4文字以上32文字以下）:</label>
              <p class="wpass">4文字以上32文字以下である必要があります</p>
            </div>
            <div>
              <input v-model="tanka" type="password" name="pass" id="seven" maxlength="32" minlength="4">
            </div>
          </div>
          <div class="formbox">
            <div class="label">
              <p class="kakuninyou">確認用</p>
              <label for="seven-2">パスワード:</label>
            </div>
            <div>
              <input v-model="nin" type="password" name="pass2" id="seven-2">
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
          new Vue({
  el: '#app',
  data(){
    return{
      tanka:'',
      nin:''
    };
  },
  computed:{
    // パスワード一致確認
    isInvalidKei(){
      return this.nin!=this.tanka;
    },
    // パスワード文字数確認
    passcnt(){
      return this.tanka.length>33 || this.tanka.length<4;
    }
  }
})
        </script>
        <div class="first"></div>
        
        


        <button type="submit">次へ</button>
        
    </form>
  </div>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js"charset="UTF-8"></script>
</body>
</html>