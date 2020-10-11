

<?php
include_once("db.php");
include_once("../libs/function.php");


// inserting post

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
        $sql1 = "insert into quiz (eid,subject_id,uniq_eid,title,correct,wrong,total,time,status) values('$eid','$subject_id','$uniq_eid',:title,:correct,:wrong,:total,:time,:status)";
        $query1 = $dbh->prepare($sql1);
        $query1->bindParam(':title', $title,PDO::PARAM_STR);
        $query1->bindParam(':correct',$correct,PDO::PARAM_STR);
        $query1->bindParam(':wrong',$wrong,PDO::PARAM_STR);
        $query1->bindParam(':total',$total,PDO::PARAM_STR);
        $query1->bindParam(':time',$time,PDO::PARAM_STR);
        $query1->bindParam(':status',$status,PDO::PARAM_STR);
        $success = $query1->execute();

        header("location:dash.php?q=4&step=2&uniq_eid=$uniq_eid&n=$total");
    }
}
//['title'=>$title,'correct'=>$correct,'wrong'=>$wrong,'totle'=>$total,'time'=>$time,'status'=>$status,]
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Admin Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">      
  

    <link href="../bootstrap/css/custom.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/6amzuxbgq4nrnvdafhv2z5oeg3v47l6pwctq0v9c1kk6lq8e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
     <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script>
      
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Dashboard</a>
            <a class="blog-nav-item" href="add_post.php">Add Post</a>
            <a class="blog-nav-item_a" href="add_category.php" >Add Category</a>
            <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
          <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
        </nav>
      </div>
    </div>

    <div class="container">

      

      <div class="row">

        <div class="col-sm-12 blog-main">
        
            <br> 
            <h2>Insert New Quiz</h2><hr>                      

<div class="col-md-3"></div><div class="col-md-6">   <form class="form-horizontal title1" name="form" action="add_post.php"  method="POST">
<fieldset>


<!-- Text input-->
            
            <div>
                <select class="form-control" name="subject">
                    <option> Select a Subject</option>
                    <?php 
                    $sql = "select*from subject";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    foreach($results as $result){
                    ?>
                    <option value="<?php echo htmlentities($result->subject_id); ?>"> <?php echo htmlentities($result->title);?>&nbsp;&nbsp;<?php echo htmlentities($result->c_title); ?></option>
                    <?php } ?>
                </select>
            </div>

<div class="form-group">
  <label class="col-md-12 control-label" for="title"></label>  
  <div class="col-md-12">
      <textarea id="name" name="title" placeholder="Enter Quiz title" class="form-control input-md" type="text"></textarea>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>  
  <div class="col-md-12">
  <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number">
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"  name="submit_post"/>
  </div>
</div>



</fieldset>
    </form></div>

