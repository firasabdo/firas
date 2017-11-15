<?php 

class CtrlContact{
	
	private $view;
	private $model;
	 function getInfo(){
	     
	     
	     $this->model->select();
	 }
	
	public function __construct(){
		$this->view = new ViewContact;
		$this->model = new ModelContact();
	}
	// this method displays
	public function getForm(){
		$this->view->afficherForm();
		$this->getInfo();
		
	}
	
	public function enregForm(){
	    $data = array(
	        'title'=>  (isset($_POST['title']) ? $_POST['title'] : ""),
	        'nom'  =>  (isset($_POST['nom']) ? $_POST['nom'] : ""),
	        'prenom'  =>  (isset($_POST['prenom']) ? $_POST['prenom'] : ""),
	        'tel'  =>  (isset($_POST['tel']) ? $_POST['tel'] : ""),
	        'email'  =>  (isset($_POST['email']) ? $_POST['email'] : ""),
	        'subject'=>  (isset($_POST['subject']) ? $_POST['subject'] : ""),
	        'message'  =>  (isset($_POST['message']) ? $_POST['message'] : "")
	    );
	    if($this->verifier($data)){
	        $this->model->inserer($data);
	        $this->view->afficheFormOk();
	    }
	    else{
	        $this->view->afficheFormNotOk();
	    }
	    
	}
	
	private function verifier($data){

		return true;
	}
	
}
?>