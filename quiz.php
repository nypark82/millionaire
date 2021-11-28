<?php
session_start();
if(isset($_SESSION["times"])){
  $times = $_SESSION["times"];
}
else{
  $_SESSION["times"] = 0;
  $times = $_SESSION["times"]; 
  $_SESSION["scores"] = 0;
}
require_once("qs.php");
// echo "TIMES".$_SESSION["times"];
// echo "SCORES".$_SESSION["scores"];
// echo "問題数".(count($questions)-1);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>quiz</title>
</head>
<body>
<div id = "container">
  <header>
    <p><img src="img/logo.svg.png"></p>
    <h3><?php echo $titles[$times]; ?></h3>
  </header> 
  <div id= questions>
    <form action="quiz_result.php" method="post">
      <div id="first-row">
        <ul>
          <label for="a_1"><li id="a_1_li"><input type="radio" name="q1" id="a_1" value="<?php echo $questions[$times][0]; ?>" onclick="selected()">A:<?php echo $questions[$times][0]; ?></li></label>
          <label id="a_2"><li id="a_2_li"><input type="radio" name="q1" id="a_2" value="<?php echo $questions[$times][1]; ?>"  onclick="selected()">B:<?php echo $questions[$times][1]; ?></li></label>
        </ul>
      </div>
      <div id="second-row">
        <ul>
          <label for="a_3"><li id="a_3_li"><input type="radio" name="q1" id="a_3" value="<?php echo $questions[$times][2]; ?>"  onclick="selected()">C:<?php echo $questions[$times][2]; ?></li></label>
          <label for="a_4"><li id="a_4_li"><input type="radio" name="q1" id="a_4" value="<?php echo $questions[$times][3]; ?>"  onclick="selected()">D:<?php echo $questions[$times][3]; ?></li></label>
        </ul>
      </div>  
      </div>
	    <div id="controller">
        <div id="next">
          <p><button type="submit">次へ進む>></button></p>
        </div> 
      </div>
    </form>  
</div>  
  <script src="main.js"></script>
</body>
</html>