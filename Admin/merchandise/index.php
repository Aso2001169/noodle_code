<?php
session_start();

function getDb(){
    $dsn='mysql:host=mysql154.phy.lolipop.lan;
  dbname=LAA1290560-blue;charset=utf8';
    $username='LAA1290560';
    $password='green';
    $pdo=new PDO($dsn,$username,$password);
    return $pdo;
}
$pdo=getDb();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  　　　<!-- Place your kit's code here -->
  <script src="https://kit.fontawesome.com/3239b2a89b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/top.css">
  <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
  <title>Document</title>
  
</head>
<body>
<?php
if(isset($_SESSION['admin'])){
require '../header.php';
?>

  <main>
    <a class="marchandise-u" href="marchandise-u.php">商品を追加する</a>
    <!-- <p>現在<span>４つ</span>の商品を表示しています</p> -->
    <div class="marchandise-R">
      <table class="marchandise-table">
        <?php
        $pdo=getDb();
        foreach($pdo->query('select * from merchandise') as $row){
          echo '<tr>';
            if($row['output_flg']==="1"){
              echo '<td class="marchandise-flg"><a href="marchandise-flg.php?id=',$row['merchandise_id'],'&flg=0">表示中</a></td>';
            }elseif($row['output_flg']==="0"){
              echo '<td class="marchandise-flg"><a href="marchandise-flg.php?id=',$row['merchandise_id'],'&flg=1">表示する</a></td>';
            }
          echo '<td class="marchandise-table-u"><a href="marchandise-update.php?id=',$row['merchandise_id'],'">更新</a></td>';
          echo '<td class="marchandise-d"><a onclick="clickEvent()" href="marchandise-d.php?id=',$row['merchandise_id'],'">削除</a></td>';
          echo '<td class="marchandise-table-name">',$row['merchandise_name'],'</td>';
          echo '<td>残り',$row['merchandise_stock'],'</td>';
          echo '<td><p class="marchandise-yen">',$row['merchandise_cost'],'</p></td>';
           echo '</tr>';
        }
        ?>
        <tr>
      </table>
      <script>
    function clickEvent() {
        alert('本当に削除しますか？');
    }
</script>
    </div>
  </main>
  <?php
}
  ?>
</body>
</html>