<?php
session_start();
// if($_SESSION["u_id"] != $_GET["u_id"]){
// 	header("Location: login.php?err=2");
// } 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ランキング</title>
	<link rel="stylesheet" href="css/list.css">
	<meta name="viewport" content="width=device-width">
	<script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div id="container">
		<h1>ランキング</h1>
		<table id="tb"></table>
		<p class="btn">
			<button id="renew">結果発表</button><a></a>
		</p>
	</div>
	<script src="js/list.js"></script>
</body>
</html>