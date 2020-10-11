<?php
session_start();
include_once("../class_quiz.php");
$data=new cls();

$total_que=0;
$exam_category = $_SESSION['exam_category'];
$q=$data->select_questionsByEid($exam_category);
$total_que= mysqli_num_rows($q);
echo $total_que;

?>
