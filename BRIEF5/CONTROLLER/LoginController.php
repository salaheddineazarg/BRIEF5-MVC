
<?php
session_start();
class LoginController extends DatabaseController {
   public function index() 
  
   {  
    $data['title']="login page";
    View::load('login',$data);

      require (view.'form.php');    
   }
   // -----------------------------------------
   public function admin()
   {
     
    if(isset($_POST['submitlogin']))
    {
      $emaillogin=$_POST['emaillogin'];
      $passwordlogin=$_POST['passwordlogin'];
      $admin=new admin;
      $auth=$admin-> check_login($emaillogin,$passwordlogin);
   if(mysqli_num_rows($auth)>0) { 
       
          $_SESSION['check'] = $emaillogin;

          header("location:".url2('gestion/index'));
      
      

     
    }else{ 
      $_SESSION['check'] == false;
      header("location:".url2('login/index'));
 
     
         
       }
   }
   }
   
  }
  ?>