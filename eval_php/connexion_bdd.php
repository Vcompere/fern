<?php
function connexionBase()
{
	// Paramètre de connexion serveur
	$host = "localhost";
	$login = "root";	//	Votre loggin d'accès au serveur de BDD
	$password = ""; 	//Le password pour vous identifier auprès du serveur
	$base = "jarditou";		// la bdd sur laquelle on travaille

	try
	{
		$db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base, $login, $password);
		return $db;
	}
	catch (exception $e)
	{
		echo 'Erreur : ' . $e->getMessage() . '<br>';
		echo 'N° : ' . $e->getCode() . '<br>';
		die('Connexion au serveur impossible.');
	}
}
?>