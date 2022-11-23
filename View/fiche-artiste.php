<!DOCTYPE html>
<html lang="fr">

<?php require_once('head.php'); ?>
<body>
	<!-- En-tête avec barre de navigation -->
	<header class="container">
		<div class="d-flex flex-wrap justify-content-center px-4 py-3 mb-4 border-bottom">
			<!-- Partie de gauche (Nom du site) -->
			<a id="lien-en-tete" href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-secondary text-decoration-none">
				<span class="fs-4 fw-bold">Vercors Music Festival 2022</span>
			</a>

			<!-- Partie de droite (Menu de navigation) -->
			<ul class="nav nav-pills">
				<li id="nav-accueil" class="nav-item mx-2">
					<a href="index.php" class="nav-link">
						Accueil
					</a>
				</li>
				<li id="nav-liste-artistes" class="nav-item mx-2">
					<a href="liste-artistes.php" class="nav-link">
						Liste des artistes
					</a>
				</li>
				<li id="nav-prog-par-jour" class="nav-item mx-2">
					<a href="prog-par-jour.php" class="nav-link">
						Programmation par jour
					</a>
				</li>
			</ul>
		</div>
	</header>

	<!-- Contenu principal de la page -->
	<main class="container px-5 mb-5">
		<h1>Fiche artiste</h1>

		<h2 class="display-4 text-center fw-bolder"><?= $artiste[1] ?></h2>

		<img class="rounded-pill mx-auto d-block my-4" src="<?= $artiste[3] ?>" alt="Illustration de l'artiste Ben Mazué">

		<hr>
		<h3>Vidéo(s) de l'artiste</h3>
		<?= $listeVideos ?>

		<hr>
		<p class="fst-italic">Pour plus d'informations, vous pouvez aller voir <a href="<?= $artiste[2] ?>" target="_blank">la page de l'artiste sur le site officiel du festival</a>.</p>
	</main>
</body>

</html>