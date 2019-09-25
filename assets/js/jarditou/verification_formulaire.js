sendButton.addEventListener("click", validation);

function validation(event) //fonction vérifiant que les champs ne soient pas vides
{
//déclaration de variables, 1 par champ dans le formulaire
	var sendButton = document.getElementById("sendButton");
	var name = document.getElementById("name");
	var birth = document.getElementById("birth");
	var address = document.getElementById("address");
	var mail = document.getElementById("mail");
	var firstName = document.getElementById("firstName");
	var sexF = document.getElementById("sexF");
	var sexM = document.getElementById("sexM");
	var zip = document.getElementById("zip");
	var city = document.getElementById("city");
	var subject = document.getElementById("subject");
	var question = document.getElementById("question");
	var agree = document.getElementById("agree");

//variables des <span> pour les alertes de champs non rempli
	var missingAgree = document.getElementById("missingAgree");
	var missingSex = document.getElementById("missingSex");
	var missingFirstName = document.getElementById("missingFirstName");
	var missingName = document.getElementById("missingName");
	var missingBirth = document.getElementById("missingBirth");
	var missingMail = document.getElementById("missingMail");
	var missingQuestion = document.getElementById("missingQuestion");
	var missingCity = document.getElementById("missingCity");
	var missingAddress = document.getElementById("missingAddress");
	var missingZip = document.getElementById("missingZip");

	var gif= document.getElementById("gif");

//REGEX
	var regexLetter = /^[A-Za-z ÁÀÂÄÃÅÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝÆÇáàâäãåéèêëíìîïñóòôöõúùûüýÿæç\'-]+$/;
	var regexMail = /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/;
	var regexAddress = /^[A-Za-z ÁÀÂÄÃÅÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝÆÇáàâäãåéèêëíìîïñóòôöõúùûüýÿæç\'0-9,.-]+$/;
	var regexZip = /^[0-9]{5}$/;

	event.preventDefault(); // bloque l'envoi automatiquement, le formulaire ne s'enverra que si l'ensemble de la vérification JS est juste
	var isValid = true;

// Vérification des champs obligatoires
// nom	
	if (name.validity.valueMissing) //si le champ est vide
	{
		isValid = false; // bloquer l'envoi
		missingName.textContent = "Entrez votre nom."; //affiche l'alerte
	}
	else if (!regexLetter.test(name.value)) //si le champ est rempli mais que la regex ne se valide pas
	{
		isValid = false; // bloquer l'envoi
		missingName.textContent = "Caractères invalides."; //affiche l'alerte
	}
	else // si le champ  est rempli et que la regex se valide
	{
		missingName.textContent = null; // masque l'alerte
	}

	
// prénom
	if (firstName.validity.valueMissing) //Fonctionnement identique à la vérification du nom
	{
		isValid = false;
		missingFirstName.textContent = "Entrez votre prénom.";
	}
	else if (!regexLetter.test(firstName.value))
	{
		isValid = false;
		missingFirstName.textContent = "Caractères invalides.";
	}
	else
	{
		missingFirstName.textContent = null;
	}


// sexe
	if (!sexM.checked && !sexF.checked) //Fonctionnement identique à la vérification du nom 
	{
		isValid = false;
		missingSex.textContent = "Veuillez indiquer votre sexe.";
	}	
	else
	{
		missingSex.textContent = null;
	}

	
// date de naissance
	if (birth.validity.valueMissing) //Fonctionnement identique à la vérification du nom 
	{
		isValid = false;
		missingBirth.textContent = "Entrez votre date de naissance.";
	}	
	else
	{
		missingBirth.textContent = "";
	}

	
// e-mail
	if (mail.validity.valueMissing)  //Fonctionnement identique à la vérification du nom
	{
		isValid = false;
		missingMail.textContent = "Entrez un mail valide.";
	}	
	else if (!regexMail.test(mail.value))
	{
		isValid = false;
		missingMail.textContent = "Caractères invalides.";
	}
	else
	{
		missingMail.textContent = null;
	}

	
// sujet de la demande
	if (subject.validity.valueMissing) //Fonctionnement identique à la vérification du nom 
	{
		isValid = false;
	}	

	
// question
	if (question.validity.valueMissing) //Fonctionnement identique à la vérification du nom 
	{
		isValid = false;
		missingQuestion.textContent = "Entrez votre question.";
	}	
	else
	{
		missingQuestion.textContent = null;
	}

	
// accord de traitement informatique
	if (!agree.checked) //Fonctionnement identique à la vérification du nom 
	{
		isValid = false;
		missingAgree.textContent = "Obligatoire pour l'envoi de votre formulaire."
	}	
	else
	 {
	 	missingAgree.textContent = null;
	 }

// Vérification des champs non obligatoires
// Code postal
	if (zip.value != "") // la condition se vérifie si le champ est rempli (valeur de zip différente de "rien")
	{
		if (!regexZip.test(zip.value)) // si le regex ne se valide pas, il renvoi FALSE ce qui vérifie la condition
		{
			isValid = false; //bloque l'envoi
			missingZip.textContent = "5 caractères, chiffres uniquement."; // affiche l'alerte
		}
		else // si le regex est validé, il renvoi TRUE, ce qui vérifie le "else"
		{
			missingZip.textContent = null; // masque l'alerte
		}
	}
	else // si le champ est vide
	{
		missingZip.textContent = null; // masque l'alerte
	}

// Ville

	 if (city.value != "") //Fonctionnement identique à la vérification du code postal
	{
		if (!regexLetter.test(city.value))
		{
		 	isValid = false;
		 	missingCity.textContent = "Caractères invalides.";
		} 
		else
		{
			missingCity.textContent = null;
		}
	}
	else
	{
		missingCity.textContent = null;
	}


// Adresse	
	if (address.value != "")  //Fonctionnement identique à la vérification du code postal
	{
		if (!regexAddress.test(address.value)) 
		{
			isValid = false;
			missingAddress.textContent = "Caractères invalides.";
		} 
		else
		{
			missingAddress.textContent = null;
		}
	}
	else // si le champ est vide
	{
		missingAddress.textContent = null; // masque l'alerte
	}
	



// Envoi du formulaire
	if(isValid)
	{
		gif.src = "";
		document.forms[0].submit();	// envoi le formulaire
	}
	else
	{
		gif.src = "gif_formulaire.gif";
	}
}
