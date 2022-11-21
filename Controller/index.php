<?php
    require_once "../Modele/Scene.php";
    require_once "../Modele/Concert.php";

    $scene = new Scene();

    $scenes = $scene->getAll();

    $concert = new Concert();

    $dateConcerts = $concert->getDateOfConcert();

    require_once "../View/index.php";

?>