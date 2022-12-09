<?php
   
   

 
     
     


class admin extends DatabaseController
{
   private $conn ;
   protected $sql;
     
   public function __Construct()
   {
  
    $this->conn = $this->connection();

      } 
    public function check_login() {
      $sql = "SELECT * FROM admin ";
       $this->sql= mysqli_query($this->conn,$sql);
       
       if($this->sql){
        return $this->sql;
       
     }
       
       

   
  }
}
?>