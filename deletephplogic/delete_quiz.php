<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();


if (isset($_GET['eid'])) {
    
        $eid = $_GET['eid'];
            
            $r1 = $data->dlt_optByEid($eid);
            $r2 = $data->dlt_qnsByEid($eid);
            $r3 = $data->dlt_htryByEid($eid);
            $result = $data->slt_ansByEid($eid);
            while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $r4 = $data->dlt_ansById($id);            
            }
        $r5 = $data->dlt_qzsByEid($eid);
        
         
        header("location:../admin/dash.php?q=0");
    
}
?>