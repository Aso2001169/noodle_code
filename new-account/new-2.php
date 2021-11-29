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
  <title>Document</title>
</head>
<body>
  <header>
    <a class="back" href="">戻る</a>
  </header>
  <h1>新規登録</h1>
  <div class="">
    <form method="post" action="result.php">
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
          <input type="text" name="user" id="two">
        </div>
      </div>
      <div class="formbox">
        <div class="label">
          <label for="three">生年月日:</label>
        </div>
        <div class="formboxBirth">
          <p><input type="number" name="year" id="three" min="1900" max="2022">年</p>
          <p><input type="number" name="mon" id="three" min="1" max="12">月</p>
          <p><input type="number" name="day" id="three" min="1" max="31">日</p>
        </div>
      </div>
        <div class="formbox">
          <div class="label">
            <label for="for">郵便番号:</label>
          </div>
          <div class="formboxBirth">
            <p><input type="text" name="postal" id="for">-</p>
            <p><input type="text" name="postalA" id="for"></p>
          </div>
        </div>

        <div class="formbox">
          <div class="label">
            <label for="five">電話番号:</label>
          </div>
          <div>
            <input type="tel" name="phon" id="five">
          </div>
        </div>
        <div class="formbox">
          <div class="label">
            <label for="eight">住所:</label>
          </div>
          <div>
            <input type="text" name="address" id="eight">
          </div>
        </div>

        <div class="formbox">
          <div class="label">
            <label for="six">メールアドレス:</label>
          </div>
          <div>
            <input type="mail" name="mail" id="six">
          </div>
        </div>
        <div class="formbox">
          <div class="label">
            <p class="kakuninyou">確認用</p>
            <label for="six-2">メールアドレス:</label>
          </div>
          <div>
            <input type="mail" id="six-2">
          </div>
        </div>

        <div class="formbox">
          <div class="label">
            <label for="seven">パスワード:</label>
          </div>
          <div>
            <input type="password" name="pass" id="seven">
          </div>
        </div>
        <div class="formbox">
          <div class="label">
            <p class="kakuninyou">確認用</p>
            <label for="seven-2">パスワード:</label>
          </div>
          <div>
            <input type="password" id="seven-2">
          </div>
        </div>
        <button type="submit">次へ</button>
    </form>
  </div>
</body>
</html>