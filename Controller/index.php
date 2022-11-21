<?php
    // inclusion du fichier Artiste.php
    require_once "../Modele/Artiste.php";

    // intence la classe artiste
    $artiste = new Artiste();

    // récupère les données de la table artiste
    $artistes = $artiste->getAll();

    while ($artiste = pg_fetch_row($artistes)) {
        echo $artiste[1];
    }

    require_once "../View/index.php";

?>