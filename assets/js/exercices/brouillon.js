<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exo_function_papillon</title>
</head>
<body>
<!--
    <script>
    var nb = 3;
    var x = 3;
    var y = 5;
    var img = "assets/image/papillon.jpg";
    
    function cube(nb)
    {
        var result = Math.pow(nb, 3);
        return result;
    }
    document.write("Le cube de "+nb+" est égal à "+cube(nb)+".");
    
    function produit (x, y)
    {
        var result = x*y;
        return result;
    }
    document.write("<br />"+"Le produit de "+x+" x "+y+" est égal à "+produit(x, y)+".");
    
    function afficheImg(img)
    {
        document.write("<br />"+"<img src=\""+img+"\">");
    }
    afficheImg(img)
    </script>
-->

	<script>
	
	function compte(phrase, lettre) //fonction pour compter nombres de caractère(s) dans une phrase
	{
		var phrase = prompt("Phrase :");
		var lettre = prompt("Caractère(s) :");
		var nb = 0;
		for (var i=0; i<phrase.length; i++) 
			{
			var letter = phrase.substr(i,lettre.length)// permet d'analyser une portion de carac égale au nombre de carac à recherché
			if (letter == lettre)
				{
				nb++
				}
			}
		alert("Il y a "+nb+" \""+lettre+"\" dans la phrase : \""+phrase+"\".")
	}
	
	function vowel(word)
	{
		var word = window.prompt("Phrase :"); // phrase à analyser
		var nbVowel = 0; // nombre de voyelle
		for (var i=0; i<word.length; i++)
		{
			var letter = word.substr(i,1);//décompose l'analyse du mot lettre par lettre
			
			if (letter == "a" || letter == "e" || letter == "i" || letter == "o" || letter == "u" || letter == "y")
			{
				nbVowel++ // incrémente de +1
			}	
		}
		alert("Il y a "+nbVowel+" voyelles.")		
	}
	/*
	function moyenne(entier)
	{
	    moyenne = total/compteur;
	    alert("Moyenne : "+moyenne);
	}
	
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	var choice = prompt("1- Multiples\n2- Somme et moyenne\n3- Recherche du nombre de voyelles\n4- Recherche du nombre des caractères suivants\n Entrez votre option :");
	
	while (choice!="1" && choice!="2" && choice!="3" && choice!="4")
	{
		var choice = prompt("1- Multiples\n2- Somme et moyenne\n3- Recherche du nombre de voyelles\n4- Recherche du nombre des caractères suivants\n Entrez votre option :");
	}
	
	switch (choice)
	{
		case "1" :
			alert("multiple");
			break;
		
		case "2" :
		   /* var total = 0, compteur = 0, moyenne = null, entier = null;
	
		    while (entier != 0)
		    {
		        total += entier;
		        compteur++;
		        var entier = parseInt(prompt("Saisir un nombre entier (0 pour stopper la saisie)"));        
		    }
			moyenne(entier);*/
			break;
			
		case "3" :
			vowel(word);
			break;
			
		case "4" :
			compte(phrase, lettre);
			break;
	}
	</script>
</body>
</html>
