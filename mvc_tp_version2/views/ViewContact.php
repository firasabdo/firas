<?php 
class ViewContact extends View{
	
	public function afficherForm(){
	    $this->affiche(array('content' => "contact"));
	}
	
	public function afficheFormOk(){
	    $this->affiche(array('content' => "formok"));
	}
	
	public function afficheFormNotOk(){
	    $this->affiche(array('content' => "formnotok"));
	}
	
}


?>