<?php

include_once './../../utils/utils.php';

class ConnectionManager {

    private static $instance;
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_options;
    protected $conn;    

    private function __construct(){
        $this->createConnection();
    }
    
    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function createConnection(){
        try{
            $this->db_host = 'localhost';
            $this->db_name = 'marketplace';
            $this->db_user = 'root';
            $this->db_password = '';
            $this->db_options = array(PDO::ATTR_PERSISTENT => true, 
                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');        
            $this->conn = new PDO("mysql:host=".$this->db_host.";dbname=". 
                        $this->db_name, $this->db_user, $this->db_password, $this->db_options);            
        }catch(PDOException $e){
            echo "No se ha podido crear la conexión a la base de datos.";
        }        
    }

    public function executeQuery($query, $args){
        try{            
            $data = null;
            $result = $this->conn->prepare($query);                                
            if(!$result->execute($args)){
                return responseQuery(false, []);                
            }   
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return responseQuery(true, $data);         
        }catch(Exception $e){
            return responseQuery(false, $e);
        }        
    }    

    public function getConnection(){        
        return $this->conn;
    }
}

?>