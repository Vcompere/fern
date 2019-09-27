<?php

// récupération et stockage du contenu des différents champs dans des variables

	require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
	$db = connexionBase(); // Appel de la fonction de connexion

	$idH = $_POST["idH"];

	$requete= $db->prepare("DELETE FROM produits WHERE pro_id=:pro_id");

	$requete->bindValue(':pro_id',$idH);

	$requete->execute(); //Enfin on execute la requete

	header("Location:liste.php");



?>
