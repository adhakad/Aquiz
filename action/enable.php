<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

    if ($_GET['enable_eid'] ) {
        $eid = $_GET['enable_eid'];
        $r1 = $data->udt_qzsStStusenabledByEid($eid);
        header("location:../admin/dash.php?q=0");
    }

?>
