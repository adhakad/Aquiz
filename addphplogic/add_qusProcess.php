<?php
include_once("../addphpclass/class.php");
include_once("../libs/function.php");
$data=new cls();





    if (@$_GET['q'] == 'addqns') {
        $n        = @$_GET['n'];
        $uniq_eid = @$_GET['uniq_eid'];
        $ch       = @$_GET['ch'];
        
        
        
        
        for ($i = 1; $i <= $n; $i++) {
            $uniq_qid  = uniqid();
            $qns  = addslashes($_POST['qns' . $i]);
            
            $q = $data->select_quizByUeid($uniq_eid);
            while ($row = mysqli_fetch_array($q)) {
            $eid   = $row['eid'];
            $q3 = $data->insert_questions($eid,$qns,$ch,$i,$uniq_qid);
            }
            $oaid = uniqid();
            $obid = uniqid();
            $ocid = uniqid();
            $odid = uniqid();
            $a    = addslashes($_POST[$i . '1']);
            $b    = addslashes($_POST[$i . '2']);
            $c    = addslashes($_POST[$i . '3']);
            $d    = addslashes($_POST[$i . '4']);
            
            $q = $data->select_questionsByEid($eid);
            while ($row = mysqli_fetch_array($q)) {
            $qid  = $row['qid'];
            $sn = $row['sn'];
            }
            
            $qa = $data->int_optA($eid,$qid,$sn,$a,$oaid);
            $qb = $data->int_optB($eid,$qid,$sn,$b,$obid);
            $qc = $data->int_optC($eid,$qid,$sn,$c,$ocid);
            $qd = $data->int_optD($eid,$qid,$sn,$d,$odid);
                        
            $q = $data->slt_optByUoptidA($oaid);
            while ($row = mysqli_fetch_array($q)) {
            $a_optid   = $row['optionid'];            
            }
            
            $q = $data->slt_optByUoptidB($obid);
            while ($row = mysqli_fetch_array($q)) {
            $b_optid   = $row['optionid'];          
            }
            
            $q = $data->slt_optByUoptidC($ocid);
            while ($row = mysqli_fetch_array($q)) {
            $c_optid   = $row['optionid'];
            }
            
            $q = $data->slt_optByUoptidD($odid);
            while ($row = mysqli_fetch_array($q)) {
            $d_optid   = $row['optionid'];
            
            }
            
            
            
            $e = $_POST['ans' . $i];
            switch ($e) {
                case 'a':
                    $ansid = $a_optid;
                    break;
                
                case 'b':
                    $ansid = $b_optid;
                    break;
                
                case 'c':
                    $ansid = $c_optid;
                    break;
                
                case 'd':
                    $ansid = $d_optid;
                    break;
                
                default:
                    $ansid = $a_optid;
            }
            $qans = $data->int_ans($eid,$sn,$ansid);
        }
        
        header("location:../admin/dash.php?q=0");
    }


?>
