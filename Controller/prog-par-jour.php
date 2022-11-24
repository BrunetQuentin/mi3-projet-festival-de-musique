<?php
    // Inclusion dse modèles
    require_once '../Modele/Concert.php';

    // Obtention de la programmation par jour
    $modeleConcert = new Concert();
    $concerts = $modeleConcert->getArtistsOfConcertsGroupByDate();

    // Envois de la vue
    $page = 'Programmation du jour';
    require_once '../View/prog-par-jour.php';
?>