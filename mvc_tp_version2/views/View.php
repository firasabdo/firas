<?php
class View{
    private $templateDefault;
    
    public function __construct(){
        $this->templateDefault = "templates/default.php";
    }
    
    public function affiche($params){
        include $this->templateDefault;
    }
}