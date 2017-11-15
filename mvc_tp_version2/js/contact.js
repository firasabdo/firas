var Contact = {
	/**
	 * Arguments
	 */
	title       : "--please select your title--",	
	nom			: "",
	prenom		: "",
	tel			: "",
	email		: "",
	subject     :"--please select your subject of message--",
	message		: "",
	
	erreur		:false,

	// Accesseurs
	/**
	 * Setter
	 */
	setTitle: function(val){
		var ok = false;
		if(this.isAlpha(val) && val != "--please select your title--"){
			this.nom = val; ok = true;
		}
		console.log(ok);
		return ok;
	},
	
	setNom: function(val){
		var ok = false;
		if(this.isAlpha(val) && val != ""){
			this.nom = val; ok = true;
		}
		console.log(ok);
		return ok;
	},
	setPrenom: function(val){
		var ok = false;
		if(this.isAlpha(val) && val != ""){
			this.prenom = val; ok = true;
		}
		return ok
	},
	setTel: function(val){
		var ok = false;
		if(this.isNumerique(val) && val != ""){
			this.tel = val; ok = true;
		}
		return ok
	},
	setEmail: function(val){
		var ok = false;
		if(this.isEmail(val) && val != ""){
			this.email = val; ok = true;
		}
		return ok
	},
	setSubject: function(val){
		var ok = false;
		if(this.isAlpha(val) && val != "--please select your subject of message--"){
			this.nom = val; ok = true;
		}
		console.log(ok);
		return ok;
	},
	setMessage: function(val){
		var ok = false;
		if(val != ""){
			this.message = val; ok = true;
		}
		return ok
	},

	setErreur: function(bool){
		this.erreur = bool;
	},
	getErreur: function(){
		return this.erreur;
	},
	/**
	 * Getter
	 */
	getTitle: function(){
		return this.title;
	},
	getNom: function(){
		return this.nom;
	},
	getPrenom: function(){
		return this.prenom;
	},
	getTel: function(){
		return this.tel;
	},
	getEmail: function(){
		return this.email;
	},
	getSubject: function(){
		return this.subject;
	},
	getMessage: function(){
		return this.message;
	},
	/**
	 * Methodes
	 */
	 setAllForm: function(params){
		//console.log(params);
		this.setErreur(false);
		this.setTitle(params.title) ? this.notError('title') : this.error('title');
		this.setNom(params.nom) ? this.notError('nom') : this.error('nom');
		this.setPrenom(params.prenom) ? this.notError('prenom') : this.error('prenom');
		this.setTel(params.tel) ? this.notError('tel') : this.error('tel');
		this.setEmail(params.email) ? this.notError('email') : this.error('email');
		this.setSubject(params.subject) ? this.notError('subject') : this.error('subject');
		this.setMessage(params.message) ? this.notError('message') : this.error('message');
	},
	afficherHTML : function(obj){  
		var identite = this.title + " ";
		identite+= this.nom;
		identite+= "<br/>";
		identite+= this.prenom;
		identite+= "<br/>";
		identite+= this.tel;
		identite+= "<br/>";
		identite+= this.email;
		identite+= "<br/>";
		identite+= this.subject;
		identite+= "<br/>";
		identite+= this.message;
		identite = identite.replace(/[\r\n]/g, "<br\/>");
		obj.innerHTML = identite;
	},
	error : function(o){
		/**
		 * Ancienne version
		 * obj = document.getElementById(o).parentNode;
		 * obj.style.backgroundColor = "#FF7373";
		 * obj.style.border = "1px solid #FF2626";
		 */
		/**
		 * Nouvelle version javascript + bootstrap
		 */
		obj = document.getElementById(o).parentNode.parentNode;
		obj.classList.add('has-error');
		/**
		 * Alternative en jquery
		 * $('#'+o).parents("div.form-group").addClass('has-error');
		 */		
		this.setErreur(true);
	},
	notError : function(o){
		/**
		 * Ancienne version
		 * obj = document.getElementById(o).parentNode;
		 * obj.style.backgroundColor = "transparent";
		 * obj.style.border = "0px";
		 */
		obj = document.getElementById(o).parentNode.parentNode;
		obj.classList.remove('has-error');
		obj.classList.add('has-success');
		/**
		 * Alternative en jquery
		 * $('#'+o).parents("div.form-group").removeClass('has-error');
		 * $('#'+o).parents("div.form-group").addClass('has-success');
		 */
	},
	isAlpha : function(str){
		var regex = /^[a-zA-Z\- ]*$/;
        return regex.test(str);
	},
	isNumerique : function(str){
		var regex = /^[0-9\.]*$/;
        return regex.test(str);
	},
	isEmail : function(str){
		var regex = /^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/i;
        return regex.test(str);
	}
}

$(document).ready(function() {
	$('button#valider').click(function(){
		//console.log('valider');
		// Block destination du résultat
		var resultat = document.getElementById("afficheForm");
		// On crée un nouvel objet 
		var contact = Object.create(Contact);
		contact.setAllForm({
			title 		: document.getElementById("select").value,
			nom 		: document.getElementById("nom").value,
			prenom		: document.getElementById("prenom").value,
			tel			: document.getElementById("tel").value,
			email		: document.getElementById("email").value,
			subject 	: document.getElementById("select").value,
			message		: document.getElementById("message").value
		});
		// On affiche le resultat s'il n'y a pas d'erreur
		//(!contact.getErreur()) ? contact.afficherHTML(resultat) : null;
		(!contact.getErreur()) ? document.getElementById('monform').submit() : null;
	});
});