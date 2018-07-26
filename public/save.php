<?php

if (isset($_POST['nom']) . ($_POST['prenom']) . ($_POST['mail']) . ($_POST['message'])){
    $array = [];
    $array['nom'] = $_POST['nom'];
    $array['prenom'] = $_POST['prenom'];
    $array['mail'] = $_POST['mail'];
    $array['message'] = $_POST['message'];

    $contenu = json_encode($array);
    file_put_contents('./../data/last_message.json', $contenu);
}

?>