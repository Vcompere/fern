/*						mini exo fin cours 04 (damande nom+prenom+sexe et redonne les infos)
var name;
var firstName;
var sex;

var name = window.prompt("Saisissez votre nom");	
var firstName = window.prompt("Saisissez votre prénom");

if (window.confirm ("Etes-vous un homme ?") == true) 
{
	sex = "Monsieur";}
else
	{sex = "Madame";
}

window.alert("Bonjour " + sex +" "+ name+" " + firstName + ".\n" + "Bienvenue sur notre site web !");
*/



/*
var a = "100";
var b = 100;
var c = 1.00
var d = true

window.alert("Ceci est une chaîne de caractères : " + a);
b--;//décrémentation
c += parseInt(a, 10);	//parseInt sert à aller rechercher la valeur de a et la convertir de texte à chiffre
d =! d;//=! pour inverser ma valeur
window.alert("a = " + a +"\n" + "b = " + b +"\n" + "c = " + c +"\n" + "d = " + d +"\n");
*/






/*
var num;
var rest;

var num = parseInt(prompt("Saisissez votre nombre")); 	//prompt est mis directement dans les parenthèse de parseInt
var rest = num%2;

if (rest==0)
{
	alert("Pair");
}
else
{
	alert("Impair");
}
*/






/*
var y = window.prompt("Entrez votre année de naissance :");
var a = 2019 - parseInt(y);
                
if (a>=18)
    {
    alert(a + " ans \nMajeur");
    }
else
    {
    alert(a + " ans \nMineur");
    }
 */




/*
 var a1 = window.prompt("Premier nombre :");
var a2 = window.prompt("Second nombre :");
var o = window.prompt("Opérateur :"); 

while ((o != "+") && (o != "-") && (o != "*") && (o != "/"))
   {
       var o = window.prompt("Entrer opérateur valide (  +  -  *  /  )");
   } 
while ((a2 == 0) && (o == "/"))
   {
       var a2 = window.prompt("Division par 0 impossible ; entrer diviseur correct");
   }    

if ( o == "+")
   {
       alert(parseInt(a1)+parseInt(a2));
   }
else if ( o == "-")
   {
       alert(parseInt(a1)-parseInt(a2));
   }
else if ( o == "*")
   {
       alert(parseInt(a1)*parseInt(a2));
   }
else if ( o == "/")
   {
       alert(parseInt(a1)/parseInt(a2));
   }
 */


/*
var salaire = parseInt(window.prompt("Salaire mensuel"))

if (window.confirm("Etes vous marié ?") == true)
    {
        var a = 25;
    }
else
    {
        var a = 20;
    }
if (window.confirm("Avez-vous des enfants") == true)
    {
        var k = parseInt(window.prompt("Combien d'enfant(s) avez-vous ?"))*10;
    }
else
    {
        var k = 0;
    }
    
if (salaire<1200)
    {
        var a = a+10;
    }
    
    
var part = a + k;
    
if (part > 50)
    {
        var part = 50;
    }

window.alert(part + "%");
 */


var i = 1;
var name = (null);

for (i=1; name != "", i++)
	{
		name = window.prompt ("Saisissez le prénom N°"+i);
	}

console.log(name+i);


/*
while (name != "")
	{
		name = window.prompt ("Saisissez le prénom N°"+i);
	}
*/

