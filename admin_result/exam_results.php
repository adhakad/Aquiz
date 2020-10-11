<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
	<meta charset="UTF-8">
	<title>answer</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    </head>
    <body>
	<center>
            
        <div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
            <h2>Your Quiz results</h2>
            <table class="table table-bordered">   
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>username</th>
                            <th>Your result</th>
                            <th>Total number of Questions</th>
                            <th>Attempted qusetions</th>
                            <th>Right answer </th>
                            <th>Wrong answer</th>
                            <th>No answer</th>
                        </tr>
                    </thead> 
                    
	<?php
       
        $eid=$_GET['eid'];
        $c="1";
        $query = $data->slt_saveRsltByEid($eid);
        while ($row = mysqli_fetch_array($query)) {
          
            
        $count        = $row['total_question'];
        $attempt_qus  = $row['attempt_question'];
        $right_ans    = $row['right_answer'];
        $wrong_ans    = $row['wrong_answer'];
        $no_ans       = $row['no_answer'];
        $percentage   = $row['percentage'];
        $username     = $row['username'];
        
          
        
       
?>
                
	            <tbody>
                        <tr>
                            <td><?php echo $c++;?></td>
                            <td><?php echo $username;?></td> 
                            <td><?php echo $percentage."%";?></td>
                            <td><?php echo $count;?></td>                                                  
                            <td><?php echo $attempt_qus;?></td>                                                   
                            <td><?php echo $right_ans;?></td>                                                  
                            <td><?php echo $wrong_ans;?></td>                       
                            <td><?php echo $no_ans;?></td>
                                                 
        <?php }?>
                        </tr>
                    </tbody>
                </table>
        
            </div>
        <div class="col-sm-2"></div>
    </div>
    </center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>