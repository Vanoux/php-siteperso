<?php

// sauvegarde des infos envoyées dans le formulaire de contact
    $request = json_encode($_REQUEST); // Retourne la représentation JSON d'une valeur
    file_put_contents('../data/last_message.json', $request); // écrit le contenu dans le fichier json
    
?>