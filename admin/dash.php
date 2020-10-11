<?php 

include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Admin || Skill's Breaker</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">      
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="css/main.css">
  <link  rel="stylesheet" href="css/font.css">
     
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" type="text/javascript"></script>
           
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
</head>


<body  style="background:#eee;">
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Skill's Breaker</span></div>

</div></div>
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dash.php?q=0"><b>Dashboard</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php
if (@$_GET['q'] == 0)
    echo 'class="active"';
?>><a href="dash.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        <li <?php
if (@$_GET['q'] == 1)
    echo 'class="active"';
?>><a href="../action/user_profile.php?q=1">Users</a></li>
   
    <li <?php
if (@$_GET['q'] == 4)
    echo 'class="active"';
?>><a href="../addHtml/add_post.php">Add Quiz</a></li>
          <li><a href="../addHtml/add_subject.php"> add Subject</a></li>
          <li><a href="../addHtml/add_category.php"> add category</a></li>
          <li><a href="index.php"> Manage subject & Category</a></li>
              
        <li <?php
if (@$_GET['q'] == 5)
    echo 'class="active"';
?>><a href="../new/removeQuiz.php">Remove Quiz</a></li>
          <li <?php
if (@$_GET['q'] == 6)
    echo 'class="active"';
?>><a href="../admin_result/result_cats.php">All Student Exam Result</a></li>
      </ul>
          </div>
  </div>
</nav>
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
if (@$_GET['q'] == 0) {
     
    $result = $data->slt_qzsOdrByDte();
    echo '<div class="panel"><table class="table table-striped title1"  style="vertical-align:middle">
<tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Total question</b></td><td style="vertical-align:middle"><b>Marks</b></td><td style="vertical-align:middle"><b>Time limit</b></td><td style="vertical-align:middle"><b>Status</b></td><td style="vertical-align:middle"><b>Action</b></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $title   = $row['title'];
        $total   = $row['total'];
        $correct = $row['correct'];
        $time    = $row['time'];
        $eid     = $row['eid'];
        $status  = $row['status'];
        if ($status == "enabled") {
            ?>
            <tr>
                <td style="vertical-align:middle"><?php echo $c++; ?></td>
                <td style="vertical-align:middle"><?php echo$title; ?></td>
                <td style="vertical-align:middle"><?php echo $total;?></td>
                <td style="vertical-align:middle"><?php echo ($correct * $total); ?></td>
                <td style="vertical-align:middle"><?php echo $time; ?>&nbsp;min</td>
                <td style="vertical-align:middle">Enabled</td>
                <td style="vertical-align:middle"><b>
                    <a href="../action/disable.php?disable_eid=<?php echo $eid; ?>" class="btn logb" style="color:#FFFFFF;background:#ff0000;font-size:12px;padding:5px;">&nbsp;
                        <span><b>Disable</b></span>
                    </a></b>
                </td>
            </tr>
  <?php
        } else {
  ?>          
            <tr>
                <td style="vertical-align:middle"><?php echo $c++; ?></td>
                <td style="vertical-align:middle"><?php echo$title; ?></td>
                <td style="vertical-align:middle"><?php echo $total;?></td>
                <td style="vertical-align:middle"><?php echo ($correct * $total); ?></td>
                <td style="vertical-align:middle"><?php echo $time; ?>&nbsp;min</td>
                <td style="vertical-align:middle">Disabled</td>
                <td style="vertical-align:middle"><b>
                    <a href="../action/enable.php?enable_eid=<?php echo $eid; ?>" class="btn logb" style="color:#FFFFFF;background:darkgreen;font-size:12px;padding:5px;">&nbsp;
                        <span><b>Enable</b></span>
                    </a></b>
                </td>
            </tr>
    <?php        
        }
    }
}


?>
</div>
</div></div> 
</body>
</html>
