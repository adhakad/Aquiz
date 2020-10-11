<?php

require_once 'db_class.php';

class newclass{
    
      private $db;
      public function __construct()
	{
		$this->db = new DB();
                $this->db = $this->db->getDB();
               
	}
        
      public function int_quiz($title,$total,$correct,$wrong,$time,$subject_id,$uniq_eid,$eid,$status){
        $stmt = $this->db->prepare("insert into quiz(eid,subject_id,uniq_eid,title,correct,wrong,total,time,status) values('$eid','$subject_id','$uniq_eid',:title,:correct,:wrong,:total,:time,:status)");
        $stmt->bindParam(':title', $title,PDO::PARAM_STR);
        $stmt->bindParam(':correct',$correct,PDO::PARAM_STR);
        $stmt->bindParam(':wrong',$wrong,PDO::PARAM_STR);
        $stmt->bindParam(':total',$total,PDO::PARAM_STR);
        $stmt->bindParam(':time',$time,PDO::PARAM_STR);
        $stmt->bindParam(':status',$status,PDO::PARAM_STR);       
        $execute = $stmt->execute();
        return true;
      }
      public function slt_subject(){
        $stmt = $this->db->prepare("select*from subject");
        $stmt->execute();
        $a=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $a;
      }
}

?>
<?php
/*
require_once 'db_class.php';

class newclass{
    
      private $dbh;
      public function __construct()
	{
		$this->dbh = new DB();
                $this->dbh = $this->dbh->getDB();
               
	}
        
      public function int_quiz($title,$total,$correct,$wrong,$time,$subject_id,$uniq_eid,$eid,$status){
        $stmt = $this->dbh->prepare("insert into quiz(eid,subject_id,uniq_eid,title,correct,wrong,total,time,status) values('$eid','$subject_id','$uniq_eid',:title,:correct,:wrong,:total,:time,:status");
        $stmt->bindParam(':title', $title,PDO::PARAM_STR);
        $stmt->bindParam(':correct',$correct,PDO::PARAM_STR);
        $stmt->bindParam(':wrong',$wrong,PDO::PARAM_STR);
        $stmt->bindParam(':total',$total,PDO::PARAM_STR);
        $stmt->bindParam(':time',$time,PDO::PARAM_STR);
        $stmt->bindParam(':status',$status,PDO::PARAM_STR);       
        $execute = $stmt->execute();
        return true;
      }
      public function slt_subject(){
        $stmt = $this->dbh->prepare("select*from subject");
        $stmt->execute();
        $a=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $a;
      }
}
*/
?>