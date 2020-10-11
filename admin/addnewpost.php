<?php
include_once 'addnewpost_class.php';
$obj = new newclass();
    


if(isset($_POST['submit_post'])){

    $title = $_POST['title'];
    $total =$_POST['total'];
    $correct = $_POST['right'];
    $wrong = $_POST['wrong'];
    $time = $_POST['time'];
    $subject_id = $_POST['subject'];
    $uniq_eid = uniqid();
    $eid="";    
    $status  = "disabled";
   
    
       $a=$obj->int_quiz($title,$total,$correct,$wrong,$time,$subject_id,$uniq_eid,$eid,$status);
        
                
    
}
?>
