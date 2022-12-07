<?php
    require 'database.php';
    class admin extends database {
    public function check_login($emaillogin, $passwordlogin){
 
      $sql = "SELECT * FROM admin WHERE email = '$emaillogin' && password = '$passwordlogin'";
      $query = $this->connection->mysqli_query($sql);

      if(mysqli_num_rows($query)>0){
        return true;
      }
           
      else{
          return false;
      }
  }
}
?>