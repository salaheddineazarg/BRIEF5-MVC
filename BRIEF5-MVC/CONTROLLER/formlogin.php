
   <?php
     class LoginController 
    {
    public function __construct(){
      session_start();
      require '../MODEL/admin.php';
      $admin= new admin;
      require '../VIEW/login.php';

    }
    public function login()
    {
      if(isset($_POST['submitlogin'])){
        $emaillogin = $user->escape_string($_POST['emaillogin']);
        $passwordlogin = $user->escape_string($_POST['passwordlogin']);
       
        $auth = $admin->check_login($emaillogin, $passwordlogin);
       
        if($auth){
        
          header('location:gestion.php');
        }
        else{
          $_SESSION['message'] = 'Invalid username or password';
          header('location:index.php');
        }
      }
      else{
        $_SESSION['message'] = 'You need to login first';
        header('location:index.php');}
    }
  }


 








?>