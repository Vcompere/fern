<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/formulaire/style_formulaire.css">
	<meta charset="UTF-8">
	<title>Formulaire Jarditou</title>
</head>
<body class="bg-light">
	<h1 class="text-center text-secondary display-4 mt-5">Formulaire<span class="text-warning"> Jarditou</span></h1>
	<noscript class="text-center">
		<h5  class="text-warning font-weight-bold">Javascript est désactivé sur votre navigateur, certaines aides à la saisie ne vous seront pas visible !<h5>
	</noscript>
	<h2 class="text-center text-info mt-5">Vos coordonnées</h2>
	<form action="verif_formulaire.php" method="post" id="form">
		<div class="container mt-4">
			<div class="row">
		    	<div class="col ">
		      		<div class="form-group">
					    <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Nom">

					    <span id="missingName" class="text-warning font-weight-bold text-right missingFieldsLeft"><?php if(preg_match("/^birth$/",$_GET["erreur"])){echo "c'est pas bon !";}?></span>

					    <input type="date"  class="form-control mt-4" id="birth" name="birth" value="aaa-mm-jj" min="1900-01-01" max="2019-08-31">
						<span id="missingBirth" class="text-warning font-weight-bold text-right missingFieldsLeft"></span>
					    <input type="text" id="address"name="address" class="form-control mt-4" placeholder="Adresse">
					    <span id="missingAddress" class="text-warning font-weight-bold text-right missingFieldsLeft"></span>
					    <input type="email" id="mail" placeholder="mail@mailbox.com" class="form-control mt-4" name="mail">
					    <span id="missingMail" class="text-warning font-weight-bold text-right missingFieldsLeft"></span>
				    </div>
		    	</div>
		    	<div class="col text-center">
		     		<div class="form-group ">
					    <input type="text"  class="form-control text-right mt-2" id="firstName" name="firstName" placeholder="Prénom">
					    <span id="missingFirstName" class="text-warning font-weight-bold text-right missingFieldsRight"></span>
					    <div class="text-right sexDiv">
						    <div class="custom-control custom-radio custom-control-inline">
								<input type="radio"  id="sexF" name="sex" value="female" class="custom-control-input">
								<label class="custom-control-label" for="sexF">Femme</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio"  id="sexM" name="sex" value="male" class="custom-control-input">
								<label class="custom-control-label" for="sexM">Homme</label>
							</div>
						</div>
					    <span id="missingSex" class="text-warning font-weight-bold text-right missingFieldsRight"></span>
						<input type="text" id="zip"name="zip" class="form-control text-right mt-4" placeholder="Code postal">
						<span id="missingZip" class="text-warning font-weight-bold text-right missingFieldsRight"></span>
						<input type="text" id="city" name="city" class="form-control text-right mt-4" placeholder="Ville">
						<span id="missingCity" class="text-warning font-weight-bold text-right missingFieldsRight"></span>
				    </div>
		   		</div>
		 	</div>
		</div>
		<div class="text-center">
			<img id="gif"  width="450rem" heigth="450rem" class="rounded-circle mt-4 pb-5">
		</div>
		<h2 class="text-center text-info mt-5">Votre demande</h2>
		<div class="container mt-4">
			<div class="row">
		    	<div class="col text-center">
		      		<div class="form-group">
						<select id="subject"  name="subject" class="form-control"> 
							<option value="commande">Mes compétences</option>
							<option value="question">Question sur un produit</option>
							<option value="Reclamation">Réclamation</option> 
							<option value="Autres">Autres</option>
						</select>				    
					</div>
		    	</div>
		    	<div class="col text-center">
		     		<div class="form-group">
				    	<textarea id="question"  name="question" rows="2"cols="25" class="form-control text-right" placeholder="Votre question"></textarea>
				    	<span id="missingQuestion" class="text-warning font-weight-bold text-right missingFieldsRight"></span>
					    <div class="text-right mt-5">
				    </div>
		   		</div>
		 	</div>
		</div>
		<div class="custom-control custom-checkbox text-center mt-5">
			<input type="checkbox" class="custom-control-input" id="agree" name="agree" value="true">
			<label class="custom-control-label" for="agree"> J'accepte le traitement informatique de ce formulaire.</label><br>
			<span id="missingAgree" class="text-warning font-weight-bold missingFields"></span>
		</div>
		<div class="text-center mt-2">
			<button type="submit" id="sendButton" class="btn btn-outline-info mr-3 btn-lg" value="Envoyer">Envoyer</button>
			<button type="reset" class="btn btn-outline-info btn-lg" value="Annuler">Annuler</button>
		</div>
	</form>
	<script src="assets/js/jarditou/verification_formulaire.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>			