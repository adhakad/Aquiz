<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();

    if ($_GET['disable_eid']) {
        $eid = $_GET['disable_eid'];
        $r1 = $data->udt_qzsStStusdisabledByEid($eid);
        $q = $data->slt_htryStusongoingScreudtfalseByEid($eid);
        
        while($row = mysqli_fetch_array($q)){
            $uname = $row['username'];
            $s = $row['score'];
            
            $r1 = $data->udt_htryStStusfnsedScreudttureByEidUname($eid, $uname);
            
        }
      header("location:../admin/dash.php?q=0");  
    }

?>