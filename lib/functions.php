<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){

	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
		
	} elseif ($_GET['page'] == "bio"){
		include __DIR__.'/../pages/bio.php';

	} elseif ($_GET['page'] == "contact"){
		include __DIR__.'/../pages/contact.php';

	} elseif ($_GET['page'] == "accueil"){
		include __DIR__.'/../pages/home.php';

	} elseif ($_GET['page'] == "admin"){
		include __DIR__.'/../public/save.php';
	}
}



function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}


// Etape 4 = récupérer le contenu du fichier json
function getUserData($data){
	$contenu = file_get_contents($data);
	$array = json_decode($contenu, true);

	print_r($array) ;
	//return ($array);

}



