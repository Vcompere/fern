<?php

// récupération de la super globale $_POST
$name = $_POST["name"];
$birth = $_POST["birth"];
$address = $_POST["address"];
$mail = $_POST["mail"];
$firstName = $_POST["firstName"];
$zip = $_POST["zip"];
$city = $_POST["city"];
$subject = $_POST["subject"];
$question = $_POST["question"];

$error = FALSE; // booléen pour controller l'envoi du formulaire

//REGEX
$regexLetter = "/^[A-Za-z ÁÀÂÄÃÅÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝÆÇáàâäãåéèêëíìîïñóòôöõúùûüýÿæç\'-]+$/";
$regexMail = "/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,8}$/";
$regexAddress = "/^[A-Za-z ÁÀÂÄÃÅÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝÆÇáàâäãåéèêëíìîïñóòôöõúùûüýÿæç\'0-9,.-]+$/";
$regexZip = "/^[0-9]{5}$/";

		// vérifications

$urlError = "";

//nom
if (empty($name) || !preg_match($regexLetter,$name)) // vérifie si le champ est vide et la regex
{
	$error = TRUE; // change le bolléen de $error pour signifier qu'il y a des erreurs et ainsi bloquer l'envoi
	$urlError = $urlError."name&"; // ajout de "name" pour la futur url (affichage des messages grace à des <span>)
}


//prenom
if (empty($firstName) || !preg_match($regexLetter,$firstName))
{
	$error = TRUE;
	$urlError = $urlError."firstName&";
}


//sexe
if (isset($_POST["sex"]))
{
	$error = TRUE;
	$urlError = $urlError."sex&";
}


//date de naissance
if (empty($birth))
{
	$error = TRUE;
	$urlError = $urlError."birth&";
}


//e-mail
if (empty($mail) || !preg_match($regexMail,$mail))
{
	$error = TRUE;
	$urlError = $urlError."mail&";
}


//sujet de la demande
if (empty($name))
{
	$error = TRUE;
	$urlError = $urlError."subject&";
}


//question
if (empty($question))
{
	$error = TRUE;
	$urlError = $urlError."question&";
}


//accord de traitement
if (!isset($_POST["agree"]))
{
	$error = TRUE;
	$urlError = $urlError."agree&";
}


//code postal
if (!empty($zip) && !preg_match($regexZip,$zip))
{
	$error = TRUE;
	$urlError = $urlError."zip&";
}


//ville
if (!empty($city) && !preg_match($regexZip,$city))
{
	$error = TRUE;
	$urlError = $urlError."city&";
}


//adresse
if (!empty($address) && !preg_match($regexAddress,$address))
{
	$error = TRUE;
	$urlError = $urlError."address&";
}

if (!$error) // si $error est false, donc qu'il n'y en a pas
{
	header("Location:bravo.php"); // envoi le formulaire
	exit;
}

header("Location:formulaire.php?erreur=".$urlError);
exit; // modifie l'url en  concaténant les $urlError
?>