<!DOCTYPE html>
<html lang="fr">

<?php require_once('head.php'); ?>
<?php $nav_active = 'Liste des artistes'; ?>
<body>
	<?php require_once('nav.php'); ?>
	<!-- Contenu principal de la page -->
	<main class="container px-5">
		<h1>Liste des artistes</h1>

		<p class="lead">Cette page affiche la liste des artistes qui se produisent pendant le festival 2022 (ordre alphabétique).</p>

		<div class="row my-5">
			<?= $listeArtistes ?>
		</div>
	</main>
</body>

</html>