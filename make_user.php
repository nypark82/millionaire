<?php
session_start();
if(empty($_POST["u_name"]) || empty($_POST["mail"])){
	exit('NG');
}
require_once("config.php");

$sql = "INSERT INTO millionaire(u_name,mail,scores,p_time) VALUES(:u_name, :mail, :scores, :p_time)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":u_name", $_POST["u_name"], PDO::PARAM_STR);
$stmt->bindValue(":mail", $_POST["mail"], PDO::PARAM_STR);
$stmt->bindValue(":scores", 0, PDO::PARAM_INT);
$stmt->bindValue(":p_time", 0, PDO::PARAM_INT);
$stmt->execute();

$_SESSION["u_name"] = h($_POST["u_name"]); 
$_SESSION["mail"] = h($_POST["mail"]); 
$_SESSION["scores"] = intval($_POST["scores"]);

//stop watchスタート
$start = time();
$_SESSION["start"] = $start;
header("Location: quiz.php");
?>