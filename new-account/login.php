<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/login.css">
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="icon" type="image/svg+xml" href="http://aso2001169.heavy.jp/noodle_code/about-img/icon.svg">
<title>noodle</title>
</head>
<body>
<div class="back-color">
    <div class="login">
        <h1>ログイン</h1>
        <form action="login_judge.php" method="post">
    <div class="ew">
        <label for="username"><i class="fas fa-envelope"></i></label>
        <input type="text" name="user" id="username" value="tatara" placeholder="ユーザー名"><br>
        <label for="password"><i class="fas fa-lock"></i></label>
        <input type="password" name="password" id="password" value="aaaa" placeholder="パスワード">
    </div>
    <input type="submit" class="btn btn-border" value="ログイン"></input><br>
    </form>
    <p class="new"><a class="entry" href="new-2.php">新規作成登録はこちら</a></p>
    </div>
</div>
</body>
</html>