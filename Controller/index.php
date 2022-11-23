<?php
    require_once "../Modele/Scene.php";
    require_once "../Modele/Concert.php";
    require_once "../Modele/LivreOr.php";

    $scene = new Scene();

    $scenes = $scene->getAll();

    $concert = new Concert();

    $dateConcerts = $concert->getDateOfConcert();

    $livreOr = new LivreOr();

    $messages = $livreOr->getfirst(5);

    require_once "../View/index.php";

?>