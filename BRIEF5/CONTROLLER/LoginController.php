<?php
class LoginController {
   public function index() 
  
   {  
    $data['title']="login page";
    View::load('login',$data);

      require (view.'form.php');    
   }
   
  }
  ?>