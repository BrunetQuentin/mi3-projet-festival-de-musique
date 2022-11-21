<?php
    // inclusion du fichier Artiste.php
    require_once "../Modele/Artiste.php";

    // intence la classe artiste
    $artiste = new Artiste();

    // récupère les données de la table artiste
    $artistes = $artiste->getAll();

    // affiche les données de la table artiste
    foreach($artistes as $artiste){
        echo $artiste['nom'] . " " . $artiste['prenom'] . "<br>";
    }

?>