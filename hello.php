<?php
	include("fonctions.php");
	$message = "Hello world !"
?>
<html>
<head>
	<title>inclusion de fichiers PHP</title>
</head>
<body>
	<?php 
		writeMessage($message);
	?>
	<br>
	<?php
		writeMessage("Bonjour tout le monde !");
	?>
	<script src="js/scripts.js"></script>
</body>
</html>