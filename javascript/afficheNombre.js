function afficheNombre(nb)
{
	//alert(nb) ;
	var unite=0, dizaines=0, centaines=0;
	unites = nb % 10;
	dizaines = nb % 100 - unites;
	centaines = nb % 1000 - dizaines - unites;
	chaine = '';

	console.log(centaines);
	switch (centaines)
	{
		case 100: chaine = 'cent'; break;
		case 200: chaine = 'deux-cent'; break;
		case 300: chaine = 'trois-cent'; break;
		case 400: chaine = 'quatre-cent'; break;
		case 500: chaine = 'cinq-cent'; break;
		case 600: chaine = 'six-cent'; break;
		case 700: chaine = 'sept-cent'; break;
		case 800: chaine = 'huit-cent'; break;
		case 900: chaine = 'neuf-cent'; break;
	}

	if (chaine != '')
		chaine += '-';

	switch (dizaines)
	{
		case 10: chaine += 'dix'; break;
		case 20: chaine += 'vingt'; break;
		case 30: chaine += 'trente'; break;
		case 40: chaine += 'quarante'; break;
		case 50: chaine += 'cinquante'; break;
		case 60: chaine += 'soixante'; break;
		case 70: chaine += 'soixante-dix'; break;
		case 80: chaine += 'quatre-vingt'; break;
		case 90: chaine += 'quatre-vingt-dix'; break;
	}

	if (chaine != '')
		chaine += '-';
	
	switch (unites)
	{
		case 1: chaine += 'un'; break;
		case 2: chaine += 'deux'; break;
		case 3: chaine += 'trois'; break;
		case 4: chaine += 'quatre'; break;
		case 5: chaine += 'cinq'; break;
		case 6: chaine += 'six'; break;
		case 7: chaine += 'sept'; break;
		case 8: chaine += 'huit'; break;
		case 9: chaine += 'neuf'; break;
	}

	alert(chaine);

}

function saisieNombre()
{
	while (true)
	{
		nombreTexte=prompt('entrez un nombre entre 1 et 999');
		nombre = parseInt(nombreTexte,10);
		if (!isNaN(nombre))
		{
			if (nombre < 1)
				alert('Le nombre doit être supérieur à 1');
			else if (nombre > 999)
				alert('Le nombre doit être inférieur à 999');
			else
				return nombre;
		}
	}
}

monnombre = saisieNombre();
afficheNombre(monnombre);

