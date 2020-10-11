<?php

include_once("libs/config.php");

class cls{
    
        private $link;
	function __construct()
	{
		$this->link = new data();	
	}
/*------------------------------------------------------ insert section start ---------------------------------------------------------*/   
    
// insert history section.   
      public function int_htry($eid,$uname,$time){
          $query=$this->link->insert("insert into history(id,username,eid,score,level,correct,wrong,date,timestamp,status,score_updated) values(NULL,'$uname','$eid' ,'0','0','0','0',NOW(),'$time','ongoing','false')");
          return true;
      }
// insert exam_results section.   
      public function int_exmresults($id,$key,$value,$answer,$exam_category){
          $query=$this->link->insert("insert into exam_results (id,q_sn,select_answer,correct_answer,eid)values($id,'$key','$value','$answer','$exam_category')");
          return true;
      }
// insert save_result section.   
      public function int_sveresult($count,$attempt_qus,$right,$wrong,$no_answer,$per,$exam_category,$username){
          $query=$this->link->insert("insert into save_result (id,total_question,attempt_question,right_answer,wrong_answer,no_answer,percentage,eid,username)values(NULL,'$count','$attempt_qus','$right','$wrong','$no_answer','$per','$exam_category','$username')");
          return true;
      }
        
/*------------------------------------------------------ select section start ---------------------------------------------------------*/         
                  
// select quiz section.
      public function slt_qzsByeid($id){
          $query=$this->link->select("select * from quiz where eid='$id' ");
          return $query;
      }
      public function slt_qzsBySubsIdStatus($id){
          $query=$this->link->select("select * from quiz where subject_id='$id' and status = 'enabled' order by date desc");
          return $query;
      }      
// select questions section.
      public function select_questionsByEid($id){
          $query=$this->link->select("select * from questions where eid='$id' ");
          return $query;
      }
      public function slt_questionsByEidSn($eid,$queno){
          $query=$this->link->select("select * from questions where eid='$eid' && sn= $queno ");
          return $query;
      }
// select history section.      
       public function slt_htryScreByEidUname($eid,$uname){
          $query=$this->link->select("select score from history where  eid='$eid' and username='$uname' ");
          return $query;
      }
      public function slt_htryByEidUname($eid,$uname){
          $query=$this->link->select("select * from history where eid='$eid' and username='$uname' ");
          return $query;
      }
// select option section.
      public function slt_optByQidQsn($qid,$question_no){
          $query=$this->link->select("select * from options where qid='$qid' and q_sn='$question_no'");
          return $query;
      }
      
// select answer section.
      public function slt_ansByEidQsn($eid,$q_sn){
          $query=$this->link->select("select * from answer where eid='$eid' and q_sn='$q_sn'");
          return $query;
      }
// select exam_results section.
      public function slt_exmresultsSansCansByEid($exam_category){
          $query=$this->link->select("select select_answer,correct_answer from exam_results where eid='$exam_category'");
          return $query;
      }
            
/*------------------------------------------------------ update section start ---------------------------------------------------------*/         

// update history section.      
    public function udt_htryStStusfnsedByUnmeEid($eid,$uname){
          $query=$this->link->update("update history set status='finished' where username='$uname' and eid='$eid'");
          return true;
      }
      public function udt_htryStScreudttrueByUnmeEid($eid,$uname){
          $query=$this->link->update("update history set score_updated='true' where username='$uname' and eid='$eid' ");
          return true;
      }
      public function udt_htryByEid($exam_category,$score,$attempt_qus,$right,$wrong){
          $query=$this->link->update("update `history` set `score`=$score,`level`=$attempt_qus,`correct`=$right,`wrong`=$wrong, date= NOW()  WHERE  eid='$exam_category'");
          return true;
      }
      
/*----------------------------------------------------- delete section start ---------------------------------------------------------*/       
  // delete exam_results section.      
      public function dlt_exmresultsByEid($eid){
          $query=$this->link->delete("delete from exam_results where eid='$eid'");
          return true;
      }
/*----------------------------------------------------- exam session section start ----------------------------------------------------*/
// exam session secton start section.      
      public function exam_session($exam_category){
          
          $_SESSION["exam_category"]=$exam_category;

          return true;
      }

          
          

        
      

 
}

?>