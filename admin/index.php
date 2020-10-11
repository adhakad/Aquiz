<?php

//Header.php file use for index.php file on header section


include_once("../addphpclass/class.php");
$data=new cls();

// select category
$cats= $data->select_category();
// select subject

$subject= $data->select_subject(); 
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
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="dash.php">Home</a>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 blog-main">        
            <br>
            <br>           
            <table class="table table-striped">               
                <tr align="center">
                    <td colspan="4"><h1>Manage Category</h1></td>
                </tr>                
                <tr>
                    <th>Category Id</th>
                    <th>Category Title</th>
                </tr>               
                <?php while($row_cats = $cats->fetch_array()): ?>                
                <tr>
                    <td><?php echo $row_cats['category_id']; ?></td>
                    <td><a href="../editHtml/edit_cats.php?id=<?php echo $row_cats['category_id']; ?> "><?php echo $row_cats['title']; ?> </a></td>                    
                </tr>        
                <?php endwhile;?>                  
            </table>
            <br>
            <br>            
            <table class="table table-striped">               
                <tr align="center">
                    <td colspan="4"><h1>Manage Subject</h1></td>
                </tr>                
                <tr>
                    <th>Subject Id</th>
                    <th>Subject Title</th>
                </tr>                
                <?php while($row_subject = $subject->fetch_array()): ?>               
                <tr>
                    <td><?php echo $row_subject['subject_id']; ?></td>
                    <td><a href="../editHtml/edit_subject.php?id=<?php echo $row_subject['subject_id']; ?> "><?php echo $row_subject['title']; ?></a></td>
                    <td><h4><?php echo $row_subject['c_title']; ?></h4></td>
                </tr>                
                <?php endwhile;?>                  
            </table>
          </div><!-- /.blog-post -->
       
        
       