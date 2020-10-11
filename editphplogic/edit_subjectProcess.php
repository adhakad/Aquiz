<?php 
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

 
$id=$_GET['id'];
if(isset($_POST['submit_update'])){
    
    $cat   = $_POST['cat'];
    $title = $_POST['title'];
    $run = $data->update_subject($cat,$title,$id);
    
}

?>


