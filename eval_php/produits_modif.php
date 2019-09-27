<!DOCTYPE html>
<html lang="Fr">
<head>
	<link rel="stylesheet" type="text/css" href="assets/CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>Formulaire modification produit</title>
</head>
<body class="bg-light">
	<header>
		<ul class="bg-info nav">
			<li><a href="liste.php" title="accueil" class="text-white text-left ml-3">Liste</a></li>
			<li><a href="produits_ajout.php" title="Ajouter" class="text-white text-left ml-3">Ajouter un produit</a></li>
		</ul>
	</header>
	<?php // ouvre php 01
		require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
		$db = connexionBase(); // Appel de la fonction de connexion
		$id = $_GET["ID"];
		require "produit_form_modif.php";

		$requete = "SELECT * FROM produits where pro_id = $id";
		$result = $db->query($requete);
		$result = $result->fetch(PDO::FETCH_OBJ);

		$requete1 = "SELECT * from categories";
		$result1 = $db->query($requete1);
		

	?> <!-- ferme php 02 -->
	<div class="container-flex">
		<form action="" method="post" id="form">
		<div class="row mt-3">
			<div class="col-2"></div>
			<div class="col-4">
				<h1 class="textVertical text-info"><?= $result->pro_libelle ?></h1>
				<img src='assets/image/tableau/<?= $result->pro_id; ?>.<?= $result->pro_photo; ?>' alt='<?= $result->pro_libelle; ?>' title='<?= $result->pro_libelle; ?>' class="imgForm rounded ">
			</div>

			<div class="col-4 align-self-center">
				<a href="produits_modif.php?ID=<?= $id-1; ?>" title="Précédent"><button type="button" class="btn btn-outline-info mb-3"><<<</button></a>
				<a href="produits_modif.php?ID=<?= $id+1; ?>" title="Suivant"><button type="button" class="btn btn-outline-info mb-3 ml-2">>>></button></a>
				<div class="row">
					<div class="col-4">
					<label for="radio">Produit bloqué: </label>
					</div>
					<div>
						<input <?php if($result->pro_bloque == 1){echo "checked";} ?> type="radio" name="blocked" id="blockedY" value="1">
						<label for="blockedY">Oui</label>
						<input <?php if($result->pro_bloque == 0){echo "checked";} ?> type="radio" name="blocked" id="blockedN" value="0" class="ml-3">
						<label for="blockedN">Non</label>
					</div>
				</div>

				<div class="row">
					<div class="col-4">
						<label for="dateA">Date d'ajout: </label>
					</div>
					<p id="dateA" class="font-weight-bold"><?= $result->pro_d_ajout; ?></p>
				</div>

				<div class="row">
					<div class="col-4">
						<label for="dateM">Date de modification: </label>
					</div>
					<p id="dateM" class="font-weight-bold"><?= date("Y-m-d");  ?></p>
				</div>
				<button type="submit" name="update" id="updateButton" class="btn btn-outline-info mt-3 btn-lg" value="modifier">Modifier</button>
				<button type="button" id="deleteButton" class="btn btn-outline-danger mt-3 btn-lg ml-3" value="supprimer" data-toggle="modal" data-target=".bd-example-modal-lg">Supprimer</button>
			</div>
		</div>

		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<label class="mt-3" for="ref">Référence</label>
				<input type="text" name="ref" id="ref" class="form-control" value=<?= $result->pro_ref; ?>>	
				<label class="mt-3" for="categ">Catégorie</label>
				<select name="categ" class="form-control">
					<?php 
						while ($row = $result1->fetch(PDO::FETCH_OBJ))
						{
							if (($row->cat_id) == ($result->pro_cat_id))
							{ ?>
								<option selected value="<?= $row->cat_id; ?>"><?= $row->cat_nom." (".$row->cat_id.")"; ?></option>
							<?php }
							else
							{ ?>
								<option value="<?= $row->cat_id; ?>"><?= $row->cat_nom." (".$row->cat_id.")"; ?></option>
							<?php }
							} ?>
				</select>
				<label class="mt-3" for="lib">Libellé</label>
				<input type="text" name="lib" id="lib" class="form-control" value=<?= $result->pro_libelle; ?>>
				<label class="mt-3" for="descri">Description</label>
				<textarea type="text" name="descri" id="descri" class="form-control"><?= $result->pro_description; ?></textarea>
				<label class="mt-3" for="prix">Prix</label>
				<input type="text" name="prix" id="prix" class="form-control" value=<?= $result->pro_prix; ?>>			
				<label class="mt-3" for="stock">Stock</label>
				<input type="text" name="stock" id="stock" class="form-control" value=<?= $result->pro_stock; ?>>
				<label class="mt-3" for="color">Couleur</label>
				<input type="text" name="color" id="color" class="form-control" value=<?= $result->pro_couleur; ?>>
			</div>
		</div>
		</form>
	</div>
	<?php
		require "modal.php";
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>