<?php

// récupération et stockage du contenu des différents champs dans des variables
$ref = $_POST["ref"];
$categ = $_POST["categ"];
$lib = $_POST["lib"];
$descri = $_POST["descri"];
$prix = $_POST["prix"];
$stock = $_POST["stock"];
$color = $_POST["color"];
$dateC = date("Y-m-d");

	$blocked = $_POST["blocked"];


// connexion à la DB jarditou
require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion




$requete= $db->prepare("INSERT INTO produits (pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_bloque, pro_d_ajout) VALUES (:pro_cat_id, :pro_ref, :pro_libelle, :pro_description, :pro_prix, :pro_stock, :pro_couleur, :pro_bloque, :pro_dateC)");

$requete->bindValue(':pro_cat_id',$categ);
$requete->bindValue(':pro_ref',$ref);
$requete->bindValue(':pro_libelle',$lib);
$requete->bindValue(':pro_description',$descri);
$requete->bindValue(':pro_prix',$prix);
$requete->bindValue(':pro_stock',$stock);
$requete->bindValue(':pro_couleur',$color);
$requete->bindValue(':pro_dateC',$dateC);
$requete->bindValue(':pro_bloque',$blocked);




$requete->execute(); //Enfin on execute la requete$requete

header("liste.php");

?>


<!--
$requete = "INSERT INTO produits (`pro_cat_id`, `pro_ref`, `pro_libelle`, `pro_description`, `pro_prix`, `pro_stock`, `pro_couleur`, `pro_bloque`) VALUES ( $categ, $ref, $lib, $descri, $prix, $stock, $color, $blocked)";

if($db->query($requete) == TRUE)
{
	echo "Valide";
}
else
{
	echo "Non valide";
}
-->