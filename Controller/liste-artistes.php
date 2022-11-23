<?php

require_once('../Modele/Artiste.php');
require_once('../Modele/Concert.php');

$modeleArtiste = new Artiste();
$modeleConcert = new Concert();
$artistes = $modeleArtiste->getAllSorted();

$listeArtistes = '';
while ($artiste = pg_fetch_row($artistes)) {
	$concert = pg_fetch_row($modeleConcert->getByArtistId($artiste[0]));
	if ($concert === false) {
		continue;
	}
	$date = date('d/m/Y', strtotime($concert[3])); // format : FR
	$listeArtistes .=
		'<div class="col-lg-3 col-md-4 col-sm-6 my-2">'
			. '<a href="fiche-artiste.php?id='.$artiste[0].'" class="lien-card">'
				. '<div class="card">'
					. '<img src="'.$artiste[3].'" class="card-img-top" alt="Illustration artiste">'
					. '<div class="card-body">'
						. '<h5 class="card-title"><span class="donnee-bdd gras">'.$artiste[1].'</span></h5>'
						. '<p class="card-text">Jour du concert : <span class="donnee-bdd">'.$date.'</span>'
						. '</p>'
					. '</div>'
				. '</div>'
			. '</a>'
		. '</div>';
}

require_once('../View/liste-artistes.php');