<?php

require_once('../Modele/Artiste.php');
require_once('../Modele/Video.php');

$id = $_GET['id'];

$modeleArtiste = new Artiste();
$modeleVideo = new Video();
$artiste = pg_fetch_row($modeleArtiste->getById($id));
$videos = $modeleVideo->getByArtistId($id);

$listeVideos = '';
while ($video = pg_fetch_row($videos)) {
	$videoId = explode('/', $video[3]);
	$videoId = trim($videoId[count($videoId) - 1]);
	$listeVideos .=
		'<article class="card m-4">'
			. '<div class="card-body">'
				. '<h4>'.$video[2].'</h4>'
				. '<div class="ratio ratio-16x9 mt-3">'
					. '<iframe src="https://www.youtube.com/embed/'.$videoId.'" title="Vidéo YouTube '.$video[2].'" allowfullscreen></iframe>'
				. '</div>'
			. '</div>'
		. '</article>';
}

require_once('../View/fiche-artiste.php');