<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){ // pages à charger en fonction des onglets

	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
		
	} elseif ($_GET['page'] == "bio"){
		include __DIR__.'/../pages/bio.php';

	} elseif ($_GET['page'] == "contact"){
		include __DIR__.'/../pages/contact.php';

	} elseif ($_GET['page'] == "accueil"){
		include __DIR__.'/../pages/home.php';
	}
}



function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}


// Etape 4 = récupérer le contenu du fichier json
function getUserData(){
	$contenu = file_get_contents('../data/user.json');
	$array = json_decode($contenu, true);

		foreach($array as $key => $value){// et afficher le contenu
			if(!is_array($value)){ //si les valeurs du tableau ne sont pas elles mêmes un tableau, afficher la clef et la valeur.
				echo "<p>" . $key . " => " . $value . "</p>";
			} else {// sinon si la valeur du tableau est un second tableau, afficher chaques clef/valeur.
				foreach($value as $secondArray){
					echo "<p>" . $secondArray['year'] . " : " . $secondArray['company'] . "</p>";
				}
			}
		}
//print_r($array); => contenu du fichier json
}



