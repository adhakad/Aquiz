<?php
session_start();
include_once("../class_quiz.php");
$data=new cls();

$question_no="";
$question="";
$count=0;
$ans="";
$exam_category = $_SESSION['exam_category'];
$queno= $_GET['questionno'];
if(isset($_SESSION["answer"][$queno] ))
{
    $ans=$_SESSION["answer"][$queno];
}
$q = $data->slt_questionsByEidSn($exam_category,$queno);
$count= mysqli_num_rows($q);
if($count==0)
{
    echo"over";
}
else
{
    while ($row= mysqli_fetch_array($q))
    {         
       $qid=$row["qid"];
       $question_no=$row["sn"];
       $question=$row["qns"];           
?>
<html>  
    <head>
        <title>online quiz</title>
    </head>
    <body>
    <div class="container">
        <form method="post" action="answer.php" class="customRadio" style="width:600px;padding: 10px;">
            
        <div class="row">
            <h4 style="color:#343434;"><?php echo $question_no; ?>.<?php echo $question; ?></h4>
        </div>
        <?php  
        $q1 = $data->slt_optByQidQsn($qid,$question_no);
        while ($row1= mysqli_fetch_array($q1))
       {        
       $option=$row1["option"];
       $optionid=$row1["optionid"];       
        ?>
        <div class="row"style="width:600px;padding: 5px;margin-top: 15px;border: 1px solid lightgray;border-radius: 2px;">
            
            <div class="col-lg-12" style="cursor: pointer;">
                <input type="radio" name="textEditor" id="" value="<?php echo $optionid; ?>"  onclick="radioclick(this.value,<?php echo $question_no; ?>)" <?php if($ans==$optionid){echo "checked";}?>>          
                <label for="dreamweaver" style="color:#606060; padding-left: 5px;font-size: 12px;"><?php echo$option; ?></label>                 
            </div>
            
        </div>
        <?php }}?> 
        <button type="submit"  class="btn " style="width: 145px;height: 38px;margin-left: 38%;margin-top: 40px;background-color: #166281;color: #fff;" >Submit Quiz</button>
            
        
      </form>
<?php } ?> 
        
    
    </body>
</html>
