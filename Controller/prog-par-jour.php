<?php
    require_once('../Modele/Concert.php');

    $modeleConcert = new Concert();
    $concerts = $modeleConcert->getArtistsOfConcertsGroupByDate();

    require_once('../View/prog-par-jour.php');
?>