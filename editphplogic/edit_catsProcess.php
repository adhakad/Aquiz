<?php 
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

$id=$_GET['id'];
if(isset($_POST['update'])){
    
    $title = $_POST['title'];
    $run = $data->update_category($title,$id);    
}

?>


