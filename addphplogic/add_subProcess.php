<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();


// inserting subject
if(isset($_POST['submit_subject'])){    
    $cat = $_POST['cat'];
    $title = $_POST['title'];
    $c_title = $_POST['c_title'];
    
    $data->insert_subject($cat,$title,$c_title);
    header("location:../admin/index.php");
}

?>