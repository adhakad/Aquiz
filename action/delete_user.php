<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

    if ($_GET['dusername']) {
        $dusername = $_GET['dusername'];
        $r2 = $data->dlt_htryByuname($dusername);
        $result = $data->dlt_usr($dusername);
        header("location:../admin/dash.php?q=1");
    }
?>
