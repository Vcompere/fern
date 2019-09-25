<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Liste</title>
	<link rel="stylesheet" type="text/css" href="assets/CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body> 
	<header>
	<ul class="bg-dark nav">
		<li><a href="liste.php" title="accueil" class="text-secondary text-left ml-3">Accueil</a></li>
		<li><a href="copie_tableau.html" title="tableau"class="text-secondary text-left ml-3"> 	 Mon compte</a></li>	
		<li><a href="formulaire.php" title="contact" target="_parent"class="text-secondary text-left ml-3">	  Contact</a></li>
		<li><a href="produits_ajout.php" title="Ajouter" class="text-secondary text-left ml-3">	  Ajouter</a></li>
	</ul>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
			</div>
			<div class="col-8">
				<?php //ouvre php 01
					require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
					$db = connexionBase(); // Appel de la fonction de connexion


					$requete = "SELECT * FROM produits ORDER BY pro_id";
					 
					$result = $db->query($requete);
					 
					if (!$result) 
					{
					    $tableauErreurs = $db->errorInfo();
					    echo $tableauErreur[2]; 
					    die("Erreur dans la requête");
					}
					 
					if ($result->rowCount() == 0) 
					{
					   // Pas d'enregistrement
					   die("La table est vide");
					}
				?> <!-- ferme php 01 -->
					<table class="table table-striped table-bordered text-center">
						<thead>
							<tr>
								<th scope='col'>Photo</th>
								<th scope='col'>ID</th>
								<th scope='col'>Référence</th>
								<th scope='col'>Libellé</th>
								<th scope='col'>Prix</th>
								<th scope='col'>Stock</th>
								<th scope='col'>Couleur</th>
								<th scope='col'>Ajout</th>
								<th scope='col'>Modif</th>
								<th scope='col'>Bloqué</th>
							</tr>
						</thead>

						<?php // ouvre php 02
						while ($row = $result->fetch(PDO::FETCH_OBJ))
						{ ?> <!-- ferme php 02 -->
						    <tr>
							    <td><img src='assets/image/jarditou/tableau/<?= $row->pro_id; ?>.<?= $row->pro_photo; ?>' alt='<?= $row->pro_libelle; ?>' title='<?= $row->pro_libelle; ?>' class="imgTab rounded"></td>
							    <td><?= $row->pro_id; ?></td>
							    <td><?= $row->pro_ref; ?></td>
							    <td><?= $row->pro_libelle; ?></td>
							    <td><?= $row->pro_prix; ?> €</td>
							    <td><?= $row->pro_stock; ?></td>
							    <td><?= $row->pro_couleur; ?></td>
							    <td><?= $row->pro_d_ajout; ?></td>
							   	<td><?= $row->pro_d_modif; ?></td>
							    <td><?= $row->pro_bloque; ?></td>
							    <td><a href="produits_modif.php?ID=<?= $row->pro_id; ?>" title="Modifier"><button type="button" class="btn btn-outline-info btn-lg">Modifier</button></a></td>
						    </tr>
						<?php } //ouvre php 03
						?> <!-- ferme php 03-->
					</table>
			</div> <!-- fin col-8 -->
		</div> <!-- fin row -->
	</div> <!-- fin container -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html> 