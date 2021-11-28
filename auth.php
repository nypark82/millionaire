<?php
session_start();
if(empty($_POST["token"]) || $_POST["token"] != $_SESSION["token"]){
	exit();
}
if(empty($_POST["u_name"]) || empty($_POST["pass"])){
	header("Location: login.php?err=1");
	exit();
}
require_once("config.php");
$sql = "SELECT * FROM users WHERE u_name=:u_name";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":u_name",h($_POST["u_name"]),PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
	//認証結果
if($_POST["pass"]==$row["pass"]){
	//認証成功
	// $u_id = intval($row["u_id"]);
	// $_SESSION["u_id"] = intval($row["u_id"]);
	header("Location: list.php");
	exit();	
}else{
	//認証失敗
	header("Location: login.php?err=2");
	exit();
}
?>