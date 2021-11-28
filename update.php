<?php
session_start();
if(empty($_SESSION["u_name"]) || empty($_SESSION["mail"])){
  print_r($_SESSION);
	exit('NG');
}
unset($_SESSION["scores"]);
//stop watch止める
$finish = time();
$start = $_SESSION["start"];
$p_time = $finish - $start;
echo $p_time;
$u_name = $_SESSION["u_name"];
$mail =  $_SESSION["mail"];
$scores = $_POST["scores"];
require_once("config.php");
$sql = "UPDATE millionaire SET scores=:scores,p_time=:p_time WHERE u_name='$u_name' AND mail='$mail'";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":scores", $scores, PDO::PARAM_INT);
$stmt->bindValue(":p_time", $p_time, PDO::PARAM_INT);
$stmt->execute();
header("Location: list.php");
?>