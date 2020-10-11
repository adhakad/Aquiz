<?php
include_once("db.php");

class data{
   
   public $host = DB_HOST;
   public $user = DB_USER;
   public $pass = DB_PASS;
   public $db_name = DB_NAME;
   
   public $link;
   public $error;
   
   public function __construct() {
       $this->connect();
   }
   private function connect(){
       
       $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
       
       if($this->link){
           
           $this->error = "connection failed". $this->link->connect_error;
       }
   }
    public function insert($query){
       
       $insert = $this->link->query($query);
       

       /*if ($insert){
           header('location:../admin/index.php?insert = Post Inserted');
       }
       else{
           echo "Did not insert";
       }*/
   }

    public function select($query){
       
       $select = $this->link->query($query);
       if ($select->num_rows > 0){
             return $select;
          }
          else{
             return false;
          }
    }
   public function update($query){
       
       $update = $this->link->query($query);
       
       /*if ($update){
           header('location:../admin/index.php?update = Post updated');
       }
       else{
           echo "Did not update";
       }*/
   }

   
   
   
   public function delete($query){
       
       $delete = $this->link->query($query);
       
       /*if ($delete){
           header('location:../admin/index.php?delete = Post deleted');
       }
       else{
           echo "Did not deleted";
       }*/
   }

   
}

?>