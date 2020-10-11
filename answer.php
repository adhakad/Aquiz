<?php
session_start();
include_once("class_quiz.php");
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
	<?php
        if(isset($_SESSION["answer"])){
            
            $username = $_SESSION["username"];
            $exam_category = $_SESSION['exam_category'];
            $a = $_SESSION["answer"];
            
        foreach ($a as $key =>$value ) {  
        $q1 = $data->slt_ansByEidQsn($exam_category,$key);    
        while($row_result=$q1->fetch_array(MYSQLI_ASSOC))		
	{
            $answer=$row_result['ansid'];
            $q_sn=$row_result['q_sn'];
            $id=$row_result['id'];
        }
        $q2 = $data->int_exmresults($id,$key,$value,$answer,$exam_category);
        }  
        if($q2){
                echo "";
            }else{
                echo "data not insert";
            }  
             echo "<br>";
        }         
        $right=0;
	$wrong=0;
        $q3 = $data->slt_exmresultsSansCansByEid($exam_category);
	while($row=$q3->fetch_array(MYSQLI_ASSOC))		
	{
            $select_ans=$row['select_answer'];
            $correct_ans=$row['correct_answer'];
            
            if($select_ans==$correct_ans)
	    {
		$right++;
	    }
	    else
	    {
		$wrong++;
	    }
	}                
	$count=0;	 
	$q4 = $data->select_questionsByEid($exam_category);
	while($row1= mysqli_fetch_array($q4))		
        {			
            if($row1['sn'])
	    {
		$count++;
	    }			
	} 
        
        $q5 = $data->slt_qzsByeid($exam_category);
           while($row= mysqli_fetch_array($q5))		
           {
               $correct=$row['correct'];
           }           
        $attempt_qus=$right+$wrong;
        $no_answer=$count-$attempt_qus;
        $per=($right*100)/($count);
        $score=$right*$correct;
        $q6 = $data->int_sveresult($count,$attempt_qus,$right,$wrong,$no_answer,$per,$exam_category,$username);
        if($q6){  
            $q7 = $data->udt_htryByEid($exam_category,$score,$attempt_qus,$right,$wrong);
           
        }else{
           echo "result not insert";
        }
        
       $q8 = $data->dlt_exmresultsByEid($exam_category);
       
?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
            <h2>Your Quiz results</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Total number of Questions</th>
                            <th><?php echo $count; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Attempted qusetions</td>
                            <td><?php echo $attempt_qus;?></td>
                        </tr>
                        <tr>
                            <td>Right answer </td>
                            <td><?php echo $right;?></td>
                        </tr>
                        <tr>
                            <td>Wrong answer</td>
                            <td><?php echo $wrong;?></td>
                        </tr>
	                <tr>
                            <td>No answer</td>
                            <td><?php echo $no_answer;?></td>
                        </tr>
	                <tr>
                            <td>Your result</td>
                            <td><?php echo $per."%";?></td>
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