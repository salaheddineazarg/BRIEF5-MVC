<?php 


class product extends DatabaseController
{
   private $table ="product";
   private $conn ;
   protected $select;
     
   public function __Construct()
   {
  
    $this->conn = $this->connection();

   }
   public function getAllProducts()
   {
   $this->select= mysqli_query($this->conn,'SELECT * FROM product');

if($this->select){
   return $this->select;
}
  
   }


}




?>