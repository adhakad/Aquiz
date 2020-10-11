<?php

include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

//delete post 

if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    $data->delete_category($id);
    header("location:../admin/dash.php?q=0");
}

?>
