<?php 

class ModelContact{
    private $dao;
    
    public function __construct(){
        
    }
    
    public function inserer($data){
        $this->dao = new DAO_MySQLi();
        $sql = "INSERT INTO contact
                (id_contact,nom,prenom,tel,email,message)
                VALUES (
                    NULL,
                    '{$data['title']}',
                    '{$data['nom']}',
                    '{$data['prenom']}',
                    '{$data['tel']}',
                    '{$data['email']}',
                    '{$data['subject']}',
                    '{$data['message']}'
                     )";
        if($result = $this->dao->bddQuery($sql)){
            // traiter le retour
        }
        else{
            // gerer l'erreur
        }
    }
    
    public function select(){
        
        $this->dao = new DAO_MySQLi();
        $sql = "SELECT * FROM civilite"
                
              ;
              
        if($result = $this->dao->bddQuery($sql)){
         var_dump($result);
        }
        else{
            // gerer l'erreur
        }
        
        
    }
}
?>