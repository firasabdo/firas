<?php 
class DAO_MySQLi implements DAO {

    private $myBdd;
    private $config;
    
    public function __construct(){
        $this->config = array(
            'host'  =>  "localhost",
            'user'  =>  "root",
            'pass'  =>    "",
            'database'=>    "mvcversion2",
            'charset'   =>  "utf8"
        );
        $this->bddConnexion();
    }
    
    public function bddConnexion(){
        $this->myBdd = new mysqli(
            $this->config['host'],
            $this->config['user'],
            $this->config['pass'],
            $this->config['database']
        );
        if($this->myBdd->connect_errno){
            die("Ereur de connexion : {$this->myBdd->connect_errno}");
        }
    }
    
    public function bddDeconnexion(){
        $this->myBdd->close();
    }
    
    public function bddQuery($sql){
        if(!$result = $this->myBdd->query($sql)){
            die("Ereur de BDD : {$this->myBdd->connect_errno}");
        }
        else{
            return $result;
        }
    }
    
    public function __destruct(){
        $this->bddDeconnexion();
    }


}
