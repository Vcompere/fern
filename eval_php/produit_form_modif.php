<?php

// récupération et stockage du contenu des différents champs dans des variables
 if (!empty($_POST))
{
	$ref = $_POST["ref"];
	$categ = $_POST["categ"];
	$lib = $_POST["lib"];
	$descri = $_POST["descri"];
	$prix = $_POST["prix"];
	$stock = $_POST["stock"];
	$color = $_POST["color"];
	$dateM = date("Y-m-d");
	$blocked = $_POST["blocked"];


	$requete= $db->prepare("UPDATE produits SET pro_cat_id=:pro_cat_id, pro_ref=:pro_ref, pro_libelle=:pro_libelle, pro_description=:pro_description, pro_prix=:pro_prix, pro_stock=:pro_stock, pro_couleur=:pro_couleur, pro_d_modif=:pro_dateM, pro_bloque=:pro_bloque WHERE pro_id=:pro_id");

	$requete->bindValue(':pro_cat_id',$categ);
	$requete->bindValue(':pro_ref',$ref);
	$requete->bindValue(':pro_libelle',$lib);
	$requete->bindValue(':pro_description',$descri);
	$requete->bindValue(':pro_prix',$prix);
	$requete->bindValue(':pro_stock',$stock);
	$requete->bindValue(':pro_couleur',$color);
	$requete->bindValue(':pro_dateM',$dateM);
	$requete->bindValue(':pro_id',$id);
	$requete->bindValue(':pro_bloque',$blocked);




	$requete->execute(); //Enfin on execute la requete


}
?>
