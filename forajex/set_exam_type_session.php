<?php
session_start();
include_once("../addphpclass/class.php");
$data=new cls();


$exam_category=$_GET["exam_category"];
$exam = $data->exam_session($exam_category);

?>