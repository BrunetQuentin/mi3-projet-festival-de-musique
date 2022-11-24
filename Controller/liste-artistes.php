<?php

// Inclusion des modèles
require_once('../Modele/Artiste.php');
require_once('../Modele/Concert.php');

// Intantiation des modèles
$modeleArtiste = new Artiste();
$modeleConcert = new Concert();

// Obtention des artistes
$artistes = $modeleArtiste->getAllSorted();

// Création des balises HTML
$listeArtistes = '';
while ($artiste = pg_fetch_row($artistes)) {
	$concert = pg_fetch_row($modeleConcert->getByArtistId($artiste[0]));
	if ($concert === false) {
		continue;
	}
	$date = strtotime($concert[3]);
	if ($date === false) {
		continue;
	}
	$date = date('d/m/Y', $date); // format : FR
	$listeArtistes .=
		'<div class="col-lg-3 col-md-4 col-sm-6 my-2">'
			. '<a href="fiche-artiste.php?id='.htmlspecialchars($artiste[0], ENT_QUOTES).'" class="lien-card">'
				. '<div class="card">'
					. '<img src="'.htmlspecialchars($artiste[3], ENT_QUOTES).'" class="card-img-top" alt="Illustration artiste">'
					. '<div class="card-body">'
						. '<h5 class="card-title"><span class="donnee-bdd gras">'.htmlspecialchars($artiste[1], ENT_QUOTES).'</span></h5>'
						. '<p class="card-text">Jour du concert : <span class="donnee-bdd">'.$date.'</span>'
						. '</p>'
					. '</div>'
				. '</div>'
			. '</a>'
		. '</div>';
}

// Envois de la vue
require_once '../View/liste-artistes.php';