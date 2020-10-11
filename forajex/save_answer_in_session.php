<?php 
session_start();
include_once("../addphpclass/class.php");
$data=new cls();

$questionno=$_GET["questionno"];
$value1=$_GET["value1"];
$_SESSION["answer"][$questionno]=$value1;

?>
