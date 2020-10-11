<?php
include_once("../class_quiz.php");
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
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>

</head>

<body>
    <div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Skill's Breaker</span></div>
<div class="col-md-4 col-md-offset-2">
 <?php

session_start();

if (!(isset($_SESSION['username']))) {
    header("location:../index.php");
} else {
    $name     = $_SESSION['name'];
    $username = $_SESSION['username'];
    
   
    echo '<span class="pull-right top title1" ><span style="color:white"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <span class="log log1" style="color:lightyellow">' . $username . '&nbsp;&nbsp;|&nbsp;&nbsp;<a href="logout.php?q=account.php" style="color:lightyellow"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
}
?>
</div>
</div></div>
<div class="bg">
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
        <li <?php if (@$_GET['q'] == 1) echo 'class="active"'; ?> ><a href="newEmptyPHP.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li <?php
if (@$_GET['q'] == 2)
    echo 'class="active"';
?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;My History</a></li>
    <li <?php
if (@$_GET['q'] == 3)
    echo 'class="active"';
?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Leaderboard</a></li>
      </ul>            
      </div>
  </div>
</nav>
<div class="container">
<div class="row">
    <div class="col-md-12"><a href=""></a>
<?php 
if(isset($_GET['sub_id'])){

    $id = $_GET['sub_id']; 
    $result = $data->slt_qzsBySubsIdStatus($id);
    
    echo '<div class="panel"><table class="table table-striped title1"  style="vertical-align:middle">
<tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Total question</b></td><td style="vertical-align:middle"><b>Correct Answer</b></td><td style="vertical-align:middle"><b>Wrong Answer</b></td><td style="vertical-align:middle"><b>Total Marks</b></td><td style="vertical-align:middle"><b>Time limit</b></td><td style="vertical-align:middle"><b>Action</b></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $total   = $row['total'];
        $correct = $row['correct'];
        $wrong   = $row['wrong'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        
        $query = $data->slt_htryScreByEidUname($eid,$_SESSION['username']);        
        if($query==false) {
       ?>     
    <tr>
        <td style="vertical-align:middle"> <?php echo $c++;?></td>
        <td style="vertical-align:middle"><?php echo $title;?></td>
        <td style="vertical-align:middle"><?php echo $total; ?></td>
        <td style="vertical-align:middle">+<?php echo $correct;?></td>
        <td style="vertical-align:middle">-<?php echo $wrong;?></td>
        <td style="vertical-align:middle"><?php echo ($correct * $total);?></td>
        <td style="vertical-align:middle"><?php echo $time;?>&nbsp;min</td>
        <td style="vertical-align:middle"><b><button type="button" class="btn " value="<?php echo $row["eid"];?>" style="width: 300px; height: 50px; box-shadow:0px 0px 20px 0px rgba(0,0,0,0.4);margin-top: 10px;background-color: #26d381;color:#fff;" onclick="set_exam_type_session(this.value);">Start</button>
         <?php 
        } else {
            
            $q1 = $data->slt_htryByEidUname($eid,$_SESSION['username']);
            while ($row =mysqli_fetch_array($q1)) {
                $timec  = $row['timestamp'];
                $status = $row['status'];
                
            }
            $q2 = $data->slt_qzsByeid($eid);
            while ($row = mysqli_fetch_array($q2)) {
                $ttimec  = $row['time'];
                $qstatus = $row['status'];
            }
            $remaining = (($ttimec * 60) - ((time() - $timec)));
            if ($remaining > 0 && $qstatus == "enabled" && $status == "ongoing") {
                ?>
               <tr style="color:darkgreen">
                   <td style="vertical-align:middle"><?php echo $c++;?></td>
                   <td style="vertical-align:middle"><?php echo $title;?>&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                   <td style="vertical-align:middle"><?php echo $total; ?></td>
                   <td style="vertical-align:middle">+<?php echo $correct;?></td>
                   <td style="vertical-align:middle">-<?php echo $wrong;?></td>
                   <td style="vertical-align:middle"><?php echo ($correct * $total);?></td>
                   <td style="vertical-align:middle"><?php echo $time;?>&nbsp;min</td>
                   <td style="vertical-align:middle"><b><a href="../exam.php?q=quiz&step=2" class="btn" style="margin:0px;background:darkorange;color:white">&nbsp;<span class="title1"><b>Continue</b></span></a></b></td>
               </tr>
        <?php 
        } else { ?>
                <tr style="color:darkgreen">
                    <td style="vertical-align:middle"><?php echo $c++;?></td>
                    <td style="vertical-align:middle"><?php echo $title;?></td>
                    <td style="vertical-align:middle"><?php echo $total;?>&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                    <td style="vertical-align:middle">+<?php echo $correct; ?></td>
                    <td style="vertical-align:middle">-<?php echo $wrong;?></td>
                    <td style="vertical-align:middle"><?php echo ($correct * $total); ?></td>
                    <td style="vertical-align:middle"><?php echo $time;?>&nbsp;min</td>
                    <td style="vertical-align:middle"><b><a href="../account.php?q=result&eid=<?php echo $row["eid"];?>" class="btn" style="margin:0px;background:darkred;color:white">&nbsp;<span class="title1"><b>View Result</b></span></a></b></td>
                </tr>
 <?php
            }
        }
    }
        
}
?>

    
    <script type="text/javascript">
         function set_exam_type_session(exam_category)
         {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function()
            {
                if(xmlhttp.readyState===4&&xmlhttp.status===200)
                {
                    
                    window.location="../exam.php";
                }
            };
            xmlhttp.open("GET","../forajex/set_exam_type_session.php?exam_category="+exam_category,true);
            xmlhttp.send(null);
            
         }
         
    </script>
    
                
                    
</body>
</html>
