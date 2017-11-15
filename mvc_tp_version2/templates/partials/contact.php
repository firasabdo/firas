<link rel="stylesheet" href="css/<?= $params['content']?>.css">				
					
		<h1 class = "location"> <SPAN style="color : red;">Firas </SPAN>Contact Form</h1>
		<div class="jumbotron">
		<form id="monform" class="form-horizontal" method="post" action="index.php?c=CtrlContact&m=enregForm">
			<div class="form-group">
			<label class="col-xs-12 col-sm-3 control-label" for="title">Title</label>
       <select id="select">
                 <option>--please select your title--</option>
                 <option>Madam</option>
                 <option>Mister</option>
                 <option>Miss</option>
                 <option>Doctor</option>
                 <option>Professor</option>
                  </select>
              </div>
			
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="nom">Nom</label>
				<div class="col-xs-12 col-sm-7">
				<input class="form-control" name="nom" id="nom" value="" placeholder="Entrer votre nom"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="prenom">Prénom</label>
				<div class="col-xs-12 col-sm-7">
				<input class="form-control" name="prenom" id="prenom" value="" placeholder="Entrer votre prénom"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="tel">Tel</label>
				<div class="col-xs-12 col-sm-7">
				<input class="form-control" name="tel" id="tel" value="" placeholder="Entrer votre téléphone"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="email">Email</label>
				<div class="col-xs-12 col-sm-7">
				<input class="form-control" name="email" id="email" value="" placeholder="Entrer votre email"/>
				</div>
			</div>
			<div class="form-group">
			<label class="col-xs-12 col-sm-3 control-label" for="title">subject</label>
       <select id="select">
                  <option>--please select your subject of message--</option>
                 <option>ask a pre-invoice</option>
                 <option>return a product</option>
                 <option>question about a product</option>
                  </select>
              </div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 control-label" for="message">Message</label>
				<div class="col-xs-12 col-sm-7">
				<textarea class="form-control" name="message" id="message" placeholder="Entrer votre message" rows="" cols=""></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12 col-sm-7 col-sm-offset-3">
					<button type="reset" class="btn btn-default" style = "font-family:Garamond; font-size:12; color: white; text-decoration:underline;background-color:red">Cancel</button>
					<button id="valider" type="button" style="float:right;" class="btn btn-success">send</button>
				</div>
			</div>
		</form>
		</div>
					
		<script src="js/<?= $params['content']?>.js"></script>
		