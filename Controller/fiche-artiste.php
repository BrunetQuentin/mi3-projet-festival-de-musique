<?php

require_once('../utils/redirect.php');

require_once('../Modele/Artiste.php');
require_once('../Modele/Video.php');

$id = $_GET['id'];
if (is_numeric($id) === false) {
	redirect('../404.html');
}

$modeleArtiste = new Artiste();
$modeleVideo = new Video();

$artiste = pg_fetch_row($modeleArtiste->getById($id));
if ($artiste === false) {
	redirect('../404.html');
}

$videos = $modeleVideo->getByArtistId($id);
$firstVideo = true;

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

require_once('../View/fiche-artiste.php');