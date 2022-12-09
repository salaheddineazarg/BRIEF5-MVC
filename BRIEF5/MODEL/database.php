<?php
class DatabaseController{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'JEWELLERY';
    protected $connection;
    protected $db;
 
    public function connection(){
 
       
            $connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if($connection)
            {
             
                return $connection;   
            }else
            {
                echo "EROOR";
            }          
        }    
 
        
    }
   
?>