<?php

// Inclusion de redirect()
require_once '../utils/redirect.php';

// Inclusion des modèles
require_once '../Modele/Artiste.php';
require_once '../Modele/Video.php';

// Obtention de l'identifiant en paramètre
$id = $_GET['id'];
if (is_numeric($id) === false) {
	redirect('../404.html');
}

// Instantiation des modèles
$modeleArtiste = new Artiste();
$modeleVideo = new Video();

// Obtention de l'artiste concerné
$artiste = pg_fetch_row($modeleArtiste->getById($id));
if ($artiste === false) {
	redirect('../404.html');
}

// Obtention des vidéos de l'artiste
$videos = $modeleVideo->getByArtistId($id);

// Pour savoir quand c'est la première vidéo
$firstVideo = true;

// Création des balises HTML
$listeVideos = '';
while ($video = pg_fetch_row($videos)) {
	if ($firstVideo === true) {
		$listeVideos .=
			'<hr>'
			. '<h3>Vidéo(s) de l\'artiste</h3>';
		$firstVideo = false;
	}
	$videoId = explode('/', $video[3]);
	if (is_array($videoId) === false) {
		continue;
	}
	$videoId = trim($videoId[count($videoId) - 1]);
	$listeVideos .=
		'<article class="card m-4">'
			. '<div class="card-body">'
				. '<h4>'.htmlspecialchars($video[2], ENT_QUOTES).'</h4>'
				. '<div class="ratio ratio-16x9 mt-3">'
					. '<iframe src="https://www.youtube.com/embed/'.htmlspecialchars($videoId, ENT_QUOTES).'" title="Vidéo YouTube '.htmlspecialchars($video[2], ENT_QUOTES).'" allowfullscreen></iframe>'
				. '</div>'
			. '</div>'
		. '</article>';
}

require_once '../View/fiche-artiste.php';