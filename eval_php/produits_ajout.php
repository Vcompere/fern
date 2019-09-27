<!DOCTYPE html>
<html lang="Fr">
<head>
	<link rel="stylesheet" type="text/css" href="assets/CSS/jardistyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>Formulaire ajout produit</title>
</head>
<body class="bg-light">
	<header>
		<ul class="bg-info nav">
			<li><a href="liste.php" title="accueil" class="text-white text-left ml-3">Liste</a></li>
		</ul>
	</header>
	<?php
		require "connexion_bdd.php";
		$db= connexionBase();

		$requete = "SELECT * from categories";
		$result = $db->query($requete);
	?>
	<div class="container-flex">
		<form action="produit_form_ajout.php" method="post" id="form">
		<div class="row">
			<div class="col-1">
			</div>
			<div class="col-10">
				<label class="mt-3" for="ref">Référence</label>
				<input type="text" name="ref" id="ref" class="form-control">	
				<label class="mt-3" for="categ">Catégorie</label>
				<select name="categ" class="form-control">
					<?php 
						while ($row = $result->fetch(PDO::FETCH_OBJ))
						{?>
							<option value="<?= $row->cat_id; ?>"><?= $row->cat_nom." (".$row->cat_id.")"; ?></option>
						<?php } ?>
				</select>
				<label class="mt-3" for="lib">Libellé</label>
				<input type="text" name="lib" id="lib" class="form-control">
				<label class="mt-3" for="descri">Description</label>
				<textarea type="text" name="descri" id="descri" class="form-control"></textarea>
				<label class="mt-3" for="prix">Prix</label>
				<input type="text" name="prix" id="prix" class="form-control">			
				<label class="mt-3" for="stock">Stock</label>
				<input type="text" name="stock" id="stock" class="form-control">
				<label class="mt-3" for="color">Couleur</label>
				<input type="text" name="color" id="color" class="form-control">
			</div>
		</div>
			<div class="row">
			<div class="col-1"></div>
				<div class="col-1">
					<label for="radio">Produit bloqué: </label>
				</div>
				<div class="col">
					<div id="radio">
						<input checked type="radio" name="blocked" id="blockedY" value="1">
						<label for="blockedY">Oui</label>
						<input type="radio" name="blocked" id="blockedN" value="0" class="ml-3">
						<label for="blockedN">Non</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-1"></div>
				<div class="col-1">
					<label for="dateA">Date d'ajout: </label>
					<label for="img">Photo: </label>
					<button type="submit" id="sendButton" class="btn btn-outline-info mt-3 btn-lg" value="Envoyer">Envoyer</button>
				</div>
				<div class="col">
						<p id="dateA" class=""><?php echo date("Y-m-d");  ?></p>
				<input type="file" name="img" class="form-control8" id="img">
				</div>			
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>