<?php 
session_start();
include_once("class_quiz.php");
$data=new cls();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Skill's Breaker</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/main.css"> 
<link  rel="stylesheet" href="css/font.css">
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 

</head>

<body style="background-color: #fff;">
<div class="header">
<div class="row">
<div class="col-lg-6">
<div class="col-md-4 col-md-offset-2">
<?php
if (!(isset($_SESSION['username']))) {
    header("location:index.php");
} else {
    $name     = $_SESSION['name'];
    $username = $_SESSION['username'];
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $username . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}
?>
</div>
</div></div>
<div>
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
                            
      </div>
  </div>
</nav>
    
    <div class="row">
         <div class="col-lg-6 col-lg-push-3">
             <br>
             <div class="row"style="padding-top: 10px;box-shadow:0px 0px 20px 0px rgba(0,0,0,0.2);border:2px solid transparent;border-radius:5px; ">
                    
<?php

 if (isset($_SESSION['exam_category'])&&!isset($_SESSION['6e447159425d2d'])) {
     $username = $_SESSION['username'];
     $exam_category = $_SESSION['exam_category'];

     $q = $data->slt_htryByEidUname($exam_category, $username);
    if (mysqli_num_rows($q) > 0) {
        $q = $data->slt_htryByEidUname($exam_category, $username);
        while ($row = mysqli_fetch_array($q)) {
            $timel  = $row['timestamp'];
            $status = $row['status'];
        }
        $q = $data->slt_qzsByeid($exam_category);
        while ($row = mysqli_fetch_array($q)) {
            $ttimel  = $row['time'];
            $qstatus = $row['status'];
        }
        $remaining = (($ttimel * 60) - ((time() - $timel)));
        
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            $_SESSION['6e447159425d2d'] = "6e447159425d2d";
            header('location:exam.php?q=quiz&step=2' );
            
        } else {
                $q = $data->udt_htryStStusfnsedByUnmeEid($exam_category,$username);
                $q = $data->slt_htryByEidUname($exam_category, $username);
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                 if($scorestatus=="false"){
                    $q = $data->udt_htryStScreudttrueByUnmeEid($exam_category,$username);
                    
                }
            //header('location:account.php?q=result&eid=' . $_GET[eid]);
        }
        
    } else {
        $time = time();
        $q = $data->int_htry($exam_category,$username,$time);
           
        $_SESSION['6e447159425d2d'] = "6e447159425d2d";
    header('location:exam.php?q=quiz&step=2');
            
    }    
 } 
  if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2&& isset($_SESSION['6e447159425d2d']) && $_SESSION['6e447159425d2d'] == "6e447159425d2d") { 
      $exam_category = $_SESSION['exam_category'];
     
  
      $q = $data->slt_htryByEidUname($exam_category, $username);
      if (mysqli_num_rows($q) > 0) {
        $q = $data->slt_htryByEidUname($exam_category, $username);
        while ($row = mysqli_fetch_array($q)) {
            $time   = $row['timestamp'];
            $status = $row['status'];
        }
        $q = $data->slt_qzsByeid($exam_category);
        while ($row = mysqli_fetch_array($q)) {
            $ttime   = $row['time'];
            $qstatus = $row['status'];
            $eeid=$row['eid'];
        }
        $remaining = (($ttime * 60) - ((time() - $time)));
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            $q = $data->slt_htryByEidUname($exam_category, $username);
            while ($row = mysqli_fetch_array($q)) {
                $time = $row['timestamp'];
            }
            $q = $data->slt_qzsByeid($exam_category);
            while ($row = mysqli_fetch_array($q)) {
                $ttime = $row['time'];
            }
            $remaining = (($ttime * 60) - ((time() - $time)));
            
            echo '<script>
var seconds = ' . $remaining . ' ;

function enable(){
  document.getElementById("sbutton").removeAttribute("disabled");

}
function frmreset(){
  document.getElementById("sbutton").setAttribute("disabled","true");
  document.getElementById("qform").reset();
}
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById(\'countdown\').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds <= 0) {
        clearInterval(countdownTimer);
        document.getElementById(\'countdown\').innerHTML = "Buzz Buzz...";
        window.location ="finish_quiz.php?eeid_id='.$eeid.'";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval(\'secondPassed()\', 1000);
</script>';
        ?>
                 
         <div class="col-lg-2 col-lg-push-2">
            <div id="current_que" style="float: left;"></div>
            <div  style="float: left;">/</div>
                <div id="total_que"></div>
          </div>            
                 
        <?php
           echo '<font size="3" style="margin-left:400px;font-family:\'typo\'  font-weight:bold;color:#626262;">Remaining Time : </font><span  style="margin-left:2px;"><font style="font-family:\'typo\';font-size:17px;color:#626262" id="countdown"></font></span>';
              
      
        } else {
            unset($_SESSION['6e447159425d2d']);
            $q = $data->udt_htryStStusfnsedByUnmeEid($exam_category,$username);
            $q = $data->slt_htryByEidUname($exam_category, $username);
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                 if($scorestatus=="false"){
                    $q = $data->udt_htryStScreudttrueByUnmeEid($exam_category,$username);
                    
                }
            header('location:account.php?q=result&eid=' . $exam_category);
        }
    } else {
        unset($_SESSION['6e447159425d2d']);
        $q = $data->udt_htryStStusfnsedByUnmeEid($exam_category,$username);
        $q = $data->slt_htryByEidUname($exam_category, $username);
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                if($scorestatus=="false"){
                   $q = $data->udt_htryStScreudttrueByUnmeEid($exam_category,$username);
                    
                }
            header('location:account.php?q=result&eid=' . $exam_category);
            
        }
        
      }

  
    
   ?> 
    
        
                 
                 <div class="row">
                     
                         <div class="col-lg-10 col-lg-push-1" style="background-color: #fff;" id="load_questions"></div>
                     
                 </div>
                 
                 
                 <div class="col-lg-6 col-lg-push-3" style="margin-bottom: 30px;">
                         <div class="col-lg-12 text-center">
                             <input type="button" class="btn" value="Previous" onclick="load_previous();" style="background-color: #166281;color: #fff;">&nbsp;
                             <input type="button" class="btn" value="Next" onclick="load_next();" style="background-color: #166281;color: #fff;">&nbsp;
                         </div>
                     </div>
                 
             </div>
         </div>
     </div>
    <?php    
        $count=0;	 
	$query2=$data->select_questionsByEid($exam_category);
	while($row1= mysqli_fetch_array($query2))		
        {			
            if($row1['sn'])
	    {
		$count++;
	    }			
	}   
    echo'<script>
         function load_previous()
         {
           if(questionno=="1")
           {
               load_questions(questionno);
           }  
           else
           {
             questionno=eval(questionno)-1; 
             load_questions(questionno);
           }
         }
         function load_next()
           {
             if(questionno=="' . $count . '")
           {
               load_questions(questionno);
           }  
           else
           {
             questionno=eval(questionno)+1; 
             load_questions(questionno);
           }             
           }
    </script>';
?>
    <p style="padding-top: 100px;font-size: 16px;" class="text-muted text-center">Copyright © 2020 | Abhishek Dhakad </p>
    <script src="main.js" type="text/javascript"></script>       
</body>
</html>
