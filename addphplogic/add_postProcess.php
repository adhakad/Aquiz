<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

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
    
    
    if($uniq_eid=='' ||$title=='' ||$total=='' ||$correct=='' ||$wrong=='' || $time=='' ||   $subject_id==''|| $status=='' ){
        echo "please fill all the fieldes !";
    }
    else{
       $run = $data->insert_quiz($eid,$subject_id,$uniq_eid,$title,$correct,$wrong,$total,$time,$status);
       
header("location:../addHtml/add_qus.php?q=4&step=2&uniq_eid=$uniq_eid&n=$total");
    }
}

?>
