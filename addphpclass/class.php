<?php

include_once("../libs/config.php");

class cls{
    
        private $link;
	function __construct()
	{
		$this->link = new data();	
	}
/*------------------------------------------------------ insert section start ---------------------------------------------------------*/   
    
// insert category section. 
      public function insert_category($cat){
          $query=$this->link->insert("insert into categories(title)values('$cat')");
          return true;
      }
// insert subject section.   
      public function insert_subject($cat,$title,$c_title){
          $query=$this->link->insert("insert into subject (category_id,title,c_title) values('$cat','$title','$c_title')");
          return true;
      }
// insert quiz section
      public function insert_quiz($eid,$subject_id,$uniq_eid,$title,$correct,$wrong,$total,$time,$status){
          $query=$this->link->insert("insert into quiz (eid,subject_id,uniq_eid,title,correct,wrong,total,time,status) values('$eid','$subject_id','$uniq_eid','$title','$correct','$wrong','$total','$time','$status')");
          return true;
      }
// insert quiz section
      public function insert_questions($eid,$qns,$ch,$i,$uniq_qid){
          $query=$this->link->insert("insert into questions(qid,eid,qns,choice,sn,uniq_qid) values (NULL,'$eid','$qns','$ch','$i','$uniq_qid')");
          return true;
      }
// insert options section
      public function int_optA($eid,$qid,$sn,$a,$oaid){
          $query=$this->link->insert("insert into options(optionid,eid,qid,q_sn,option,uniq_optionid) values (NULL,'$eid','$qid','$sn','$a','$oaid')");
          return true;
      }public function int_optB($eid,$qid,$sn,$b,$obid){
          $query=$this->link->insert("insert into options(optionid,eid,qid,q_sn,option,uniq_optionid) values (NULL,'$eid','$qid','$sn','$b','$obid')");
          return true;
      }
      public function int_optC($eid,$qid,$sn,$c,$ocid){
          $query=$this->link->insert("insert into options(optionid,eid,qid,q_sn,option,uniq_optionid) values (NULL,'$eid','$qid','$sn','$c','$ocid')");
          return true;
      }
      public function int_optD($eid,$qid,$sn,$d,$odid){
          $query=$this->link->insert("insert into options(optionid,eid,qid,q_sn,option,uniq_optionid) values (NULL,'$eid','$qid','$sn','$d','$odid')");
          return true;
      }
// insert answer section      
      public function int_ans($eid,$sn,$ansid){
          $query=$this->link->insert("insert into answer(id,eid,q_sn,ansid) values (NULL,'$eid','$sn','$ansid')");
          return true;
      }
           
/*------------------------------------------------------ select section start ---------------------------------------------------------*/         
      
// select category section. 
      public function select_category(){
          $query=$this->link->select("select * from categories"); 
          return $query;
      }
      public function select_categoryById($id){
          $query=$this->link->select("select * from categories where category_id ='$id'");
          $row = $query->fetch_array();
          return $row;
      }
      
// select subject section.
      public function select_subject(){
          $query=$this->link->select("select * from subject");  
             return $query;  
      }
      public function select_subjectById($id){
          $query=$this->link->select("select * from subject where subject_id='$id' ");
          $row = $query->fetch_array();
          return $row;
      }
      public function select_subjectByCatid($id){
          $query=$this->link->select("select * from subject where category_id='$id' ");          
          return $query;
      }
      
// select quiz section.
      public function slt_qzsOdrByDte(){
          $query=$this->link->select("select * from quiz order by date desc");
          return $query;
      }
      public function slt_qzsByeid($id){
          $query=$this->link->select("select * from quiz where eid='$id' ");
          return $query;
      }
      public function select_quizByUeid($id){
          $query=$this->link->select("select * from quiz where uniq_eid='$id' ");
          return $query;
      }
      public function select_quizBySubsid($id){
          $query=$this->link->select("select * from quiz where subject_id='$id' ");
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
// select optins section.
      public function slt_optByUoptidA($id){
          $query=$this->link->select("select * from options where uniq_optionid='$id' ");
          return $query;
      }
      public function slt_optByUoptidB($id){
          $query=$this->link->select("select * from options where uniq_optionid='$id' ");
          return $query;
      }
      public function slt_optByUoptidC($id){
          $query=$this->link->select("select * from options where uniq_optionid='$id' ");
          return $query;
      }
      public function slt_optByUoptidD($id){
          $query=$this->link->select("select * from options where uniq_optionid='$id' ");
          return $query;
      }
// select answer section.      
      public function slt_ansByEid($id){
          $query=$this->link->select("select * from answer where eid='$id' ");
          return $query;
      }
// select saveresult section.      
       public function slt_saveRsltByEid($id){
          $query=$this->link->select("select * from save_result where id and eid='$id' order by percentage desc");
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
      public function slt_htryStusongoingScreudtfalseByEid($eid){
          $query=$this->link->select("select * from history where eid='$eid' and status='ongoing' and score_updated='false'");
          return $query;
      }
      
// select user section.      
       public function slt_usrNmeByUnmePswd($uname,$pass){
          $query=$this->link->select("select name from user where username = '$uname' and password ='$pass'");
          return $query;
      }
      public function slt_usr(){
          $query=$this->link->select("select * from user");
          return $query;
      }

            
/*------------------------------------------------------ update section start ---------------------------------------------------------*/         

// update category section.      
    public function update_category($title,$id){
          $query=$this->link->update("update categories set title='$title' where category_id='$id'");
          return true;
      }
// update subject section.      
    public function update_subject($cat,$title,$id){
          $query=$this->link->update("update subject set category_id='$cat',title='$title' where subject_id='$id'");
          return true;
      }  
// update quiz section.      
    public function udt_qzsStStusenabledByEid($eid){
          $query=$this->link->update("update quiz set status='enabled' where eid='$eid'");
          return true;
      }
      public function udt_qzsStStusdisabledByEid($eid){
          $query=$this->link->update("update quiz set status='disabled' where eid='$eid'");
          return true;
      }
// update history      
    public function udt_htryStStusfnsedScreudttureByEidUname($eid,$uname){
          $query=$this->link->update("update history set status='finished',score_updated='true' where eid='$eid' and username='$uname' ");
          return true;
      }  
/*----------------------------------------------------- delete section start ---------------------------------------------------------*/       
  
// delete category section. 
    public function delete_category($id){
          $query=$this->link->delete("delete from categories where category_id='$id' ");
          return true;
      }  
// delete subject section.      
      public function delete_subject($id){
          $query=$this->link->delete("delete from subject where subject_id='$id' ");
          return true;
      }
// delete quiz section.      
      public function dlt_qzsByEid($id){
          $query=$this->link->delete("delete from quiz where eid='$id' ");
          return true;
      }
// delete questions section.      
      public function dlt_qnsByEid($id){
          $query=$this->link->delete("delete from questions where eid='$id' ");
          return true;
      }
      
// delete options section.      
      public function dlt_optByEid($id){
          $query=$this->link->delete("delete from options where eid='$id' ");
          return true;
      }
// delete answer section.      
      public function dlt_ansById($id){
          $query=$this->link->delete("delete from answer where id='$id' ");
          return true;
      }
// delete history section.      
      public function dlt_htryByEid($id){
          $query=$this->link->delete("delete from history where eid='$id' ");
          return true;
      }
      public function dlt_htryByuname($id){
          $query=$this->link->delete("delete from history where username='$id' ");
          return true;
      }
// delete user section.      
      public function dlt_usr($id){
          $query=$this->link->delete("delete from user where username='$id' ");
          return true;
      }

      
/*------------------------------------------------------ exam session -------------------------------------------------*/      
// exam session secton start section.      
      public function exam_session($exam_category){
          
          $_SESSION["exam_category"]=$exam_category;

          return true;
      }
      
      

 
}

?>