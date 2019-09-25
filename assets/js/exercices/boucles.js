			/// 2 ///

var entiers = "" //

for (var n = parseInt(window.prompt("Entrez nombre")); n>0; n--)
{
	entiers = entiers+" "+n;
}
alert(entiers);
	
		
		
			///   3   ///
		
var n1 = parseInt(window.prompt("Entrez premier nombre"));
var n2 = parseInt(window.prompt("Entrez second nombre"));
var math = 0;
var sommes = ""
		
		
if (n1>n2)
{	
	for (n2; n1>=n2; n2++)
	{
		math = math + n2;
		var sommes = sommes+" + "+n2+" ";
	}
}
else if (n2>n1)
{
	for (n1; n2>=n1; n1++)
	{
		math = math + n1;
		var sommes = sommes+" + "+n1+" ";
	}
}

alert(sommes + " = " + math);



///   7   ///

var nb = window.prompt("Entrez un nombre :");
premier = new boolean (true);

for(i=2;i<n;i++)
{
	if (n%i==0)
	{
		premier = false;
	}
}

alert(nb+" est premier : "+premier);








var nb = window.prompt("Entrez un nombre :");
premier = (true);

for(i=2;i<nb;i++)
{
	if (nb%i==0)
	{
		alert(nb+" n'est pas premier.");
	}
	else
  {
		alert(nb+" est premier.")
	}	
}





///   8   ///


var magic = parseInt(Math.random()*100);
var nb = prompt("Tentez de deviner le nombre magique !");

do 
{
	if (nb>magic)
  {
    nb = prompt("Plus petit !");
  }
	else if (nb<magic)
	{
		nb = prompt("Plus grand !");
	}
}
while (nb!=magic)
	
alert("Félicitations !");

