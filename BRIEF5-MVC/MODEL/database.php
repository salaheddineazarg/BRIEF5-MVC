<?php
class database{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'JEWELLERY';
 
    protected $connection;
 
    public function __construct(){
 
       
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            return $this->connection;          
        }    
 
        
    }
   
?>