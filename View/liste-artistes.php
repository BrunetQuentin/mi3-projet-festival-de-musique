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
			<div class="col-lg-3 col-md-4 col-sm-6 my-2">
				<a href="fiche-artiste.php?id=15" class="lien-card">
					<div class="card">
						<img src="https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/4afc24a470798044c26e489b85484df6009aa88d.jpeg" class="card-img-top" alt="Illustration artiste">
						<div class="card-body">
							<h5 class="card-title"><span class='donnee-bdd gras'>Adèle & Robin</span></h5>
							<p class="card-text">
								Jour du concert : <span class='donnee-bdd'>03/07/2022</span>
							</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 my-2">
				<a href="fiche-artiste.php?id=7" class="lien-card">
					<div class="card">
						<img src="https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/7c50b32e3b1e42208fdc6df1ad26106c7cbd88d0.jpeg" class="card-img-top" alt="Illustration artiste">
						<div class="card-body">
							<h5 class="card-title"><span class='donnee-bdd gras'>ARABELLA</span></h5>
							<p class="card-text">
								Jour du concert : <span class='donnee-bdd'>02/07/2022</span>
							</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 my-2">
				<a href="fiche-artiste.php?id=23" class="lien-card">
					<div class="card">
						<img src="https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/5ef8af816bc5ae6bbef10cc5c16edb03de6fa7e4.jpeg" class="card-img-top" alt="Illustration artiste">
						<div class="card-body">
							<h5 class="card-title"><span class='donnee-bdd gras'>Bark</span></h5>
							<p class="card-text">
								Jour du concert : <span class='donnee-bdd'>03/07/2022</span>
							</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 my-2">
				<a href="fiche-artiste.php?id=4" class="lien-card">
					<div class="card">
						<img src="https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/da8f87ecab95b2bc9a5aa536082386e5cbbab405.jpeg" class="card-img-top" alt="Illustration artiste">
						<div class="card-body">
							<h5 class="card-title"><span class='donnee-bdd gras'>Ben Mazué</span></h5>
							<p class="card-text">
								Jour du concert : <span class='donnee-bdd'>01/07/2022</span>
							</p>
						</div>
					</div>
				</a>
			</div>

			<p>...</p>

		</div>
	</main>
</body>

</html>