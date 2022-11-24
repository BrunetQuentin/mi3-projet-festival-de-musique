<?php
    // Inclusion des modèles
    require_once '../Modele/Scene.php';
    require_once '../Modele/Concert.php';
    require_once '../Modele/LivreOr.php';

    // Obtention des scènes
    $scene = new Scene();
    $scenes = $scene->getAll();

    // Obtention des concerts
    $concert = new Concert();
    $dateConcerts = $concert->getDateOfConcert();

    // Obtention des premiers messages
    $livreOr = new LivreOr();
    $messages = $livreOr->getfirst(5);

    // Envois de la vue
    require_once '../View/index.php';

?>