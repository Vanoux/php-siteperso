<?php

// recup le contenu du last_message.json (du formulaire de contact)

$data = file_get_contents('../data/last_message.json');
$arrayContact = json_decode($data, true);

    foreach($arrayContact as $key => $value){ // affiche les info envoyé dans contact
        if (!is_array($value)){ //si les valeurs du tableau ne sont pas elles mêmes un tableau, afficher la clef et la valeur.
            echo "<p>" . $key . "=> " . $value . "</p>" . "\n";
        } else {
            echo "valeurs non trouvées !!";
        }
    }
    
?>
 