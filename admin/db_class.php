<?php
require_once 'db.php';

class DB{
    private $db_HOST = db_HOST;
    private $db_USER = db_USER;
    private $db_PASS = db_PASS;
    private $db_NAME = db_NAME;
    private $dbh;
    
    


    public function __construct(){ 
        try
        {
            $this->dbh = new PDO('mysql:host='.$this->db_HOST.';dbname='.$this->db_NAME, $this->db_USER, $this->db_PASS);
        }
        catch (PDOException $e)
        {
        exit("Error: " . $e->getMessage());
        }
        return $this->dbh;
    }
    
    public function getDB(){
        if($this->dbh instanceof PDO){
            return $this->dbh;
        }
    }
}


?>


