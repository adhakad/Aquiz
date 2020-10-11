<?php
session_start();
include_once("class_quiz.php");
$data=new cls();

if (!(isset($_SESSION['username']))) {
    header("location:index.php");
} else {
    $name     = $_SESSION['name'];
    $username = $_SESSION['username'];
   
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $username . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}

if (isset($_GET['eeid_id']) && isset($_SESSION['6e447159425d2d']) && $_SESSION['6e447159425d2d'] == "6e447159425d2d" ) {
    $username = $_SESSION['username'];
    $eid=$_GET['eeid_id'];
    
    unset($_SESSION['6e447159425d2d']);
    $q = $data->udt_htryStStusfnsedByUnmeEid($eid,$username);
        $q = $data->slt_htryByEidUname($eid, $username);
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                if($scorestatus=="false"){
                   $q = $data->udt_htryStScreudttrueByUnmeEid($eid,$username);
                    
                }
            header('location:answer.php');// or //header('location:result.php');
}




?>
