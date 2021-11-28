<?php
session_start();
$times = $_SESSION["times"];
require_once("qs.php");
if(!empty($_POST["q1"])){
  if($answers[$times] == $_POST["q1"]){
    ++$_SESSION["scores"];
  }
  ++$_SESSION["times"];
 header("Location: quiz.php");
}
if($times >= (count($questions)-1)){
  unset($_SESSION["times"]);
  header("Location: result.php");
}
?>