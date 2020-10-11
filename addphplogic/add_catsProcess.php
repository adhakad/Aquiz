<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

if(isset($_POST['submit_cats'])){   
    $cat = $_POST['cat_name'];
    $data->insert_category($cat);
    header("location:../admin/dash.php?q=0");    
}
?>

