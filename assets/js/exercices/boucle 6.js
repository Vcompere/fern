var word = window.prompt("Mot :"); //mot à analyser
var  wordTab = [word]; //tentative de mettre le mot en tableau? (pas sûr du tout) pour tester certaines fonctions
var nb = word.length; //nombre de lettres du mot
var nbA = 1 //nombre de A

​for (var i = 0; i < nb; i++)
{
	var posA = word.indexOf("a"); //donne la position de la première occurence de A. Si aucun A     ->   -1
	/*var posE = word.indexOf("e");
	var posI = word.indexOf("i");
	var posO = word.indexOf("o");
	var posU = word.indexOf("u");
	var posY = word.indexOf("y");*/

	while (posA != "-1") // s'applique tant qu'il reste des A dans le mot (cf comm' [var posA] ligne 8)
	{
		var restA = word.substr(posA); // à chaque fois qu'un A est trouvé, sa position devient le point de départ de la prochaine analye d'[index.Of]  
		posA = restA.indexOf("a"); // on recherche la première occurence de A
		nbA++; // on incrémente nbA à chaque ittération 
	}
}

alert(nbA/*+nbE+nbI+nbO+nbU+nbY*/); //somme des nb






								//////////////////////////

var word = window.prompt("Mot :"); // mot à analyser
var nbWord = word.length; // longueur du mot
var nbVowel = 0; // nombre de voyelle

for (var i=0; i<nbWord; i++)
{
	var letter = word.substr(i,1)//décompose l'analyse du mot lettre par lettre
	
	if (letter == "a" || letter == "e" || letter == "i" || letter == "o" || letter == "u" || letter == "y")
	{
		nbVowel++ // incrémente de +1
	}	
}

alert("Il y a "+nbVowel+" voyelles.")





<script>
	var phrase = prompt("Phrase :");
	var lettre = prompt("Lettre :");
	var nb = 0
	
	function compte(phrase, lettre)
	{
		for (var i=0; i<phrase.length; i++)
			{
			var letter = phrase.substr(i,lettre.length)
			if (letter == lettre)
				{
				nb++
				}
			}
		document.write("Il y a "+nb+" \""+lettre+"\" dans la phrase : \""+phrase+"\".")
	}
	compte(phrase, lettre);
	</script>