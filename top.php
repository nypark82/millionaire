<?php
session_start();
// if(empty($_SESSION["u_name"]) || empty($_SESSION["mail"])){
// 	exit('NG');
// }
require_once("config.php");
$u_name = h($_POST["u_name"]); 
$mail = h($_POST["mail"]); 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Top画面</title>
</head>
</html>
<body>
<div class="main">
  <div class="site-logo">
    <p><img src="img/logo.svg.png" alt="logo"></p>
  </div>
  <div class="question-title">
    <h1>雑学クイズ</h1>
  </div>
  <div class="question-instruction">
    <p>
      これからクイズが4題出題されます<br>
      必ずいずれかの選択肢を選んでください<br>
      正答数と正答タイムによって順位が決定します
      STARTボタンを押されるとゲームが開始されます
    </p>
  </div>
    <div id="start-btn">
      <form action="make_user.php" method="post">
        <button type="submit"><p>START</p></button>
        <input type="hidden" name="u_name" id="u_name" value="<?php echo h($u_name); ?>">
        <input type="hidden" name="mail" id="mail" value="<?php echo h($mail); ?>">
      </form>
    </div>
</div>
</body>
