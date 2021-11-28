<?php
session_start();
// if(empty($_SESSION["u_name"]) || empty($_SESSION["mail"])){
//   print_r($_SESSION);
// 	exit('NG');
// }
$u_name = $_SESSION["u_name"];
$scores = $_SESSION["scores"];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Result</title>
</head>
<body>
<div class="container">
  <div class="site-logo">
    <p><img src="img/logo.svg.png" alt="logo"></p>
  </div>
  <div class="question-title">
    <h1>結果発表</h1>
  </div>
  <div class="question-instruction">
    <p><?php echo $u_name;?>さんは、3問中<?php echo $scores;?>問正解しました。</p>
  </div>
    <div id="start-btn">
      <form action="update.php" method="post">
        <button type="submit"><p>ランキング表示</p></button>
        <input  type="hidden" name="scores" value= "<?php echo $scores; ?>">
      </form>
    </div>
</div>
</body>
</html>
