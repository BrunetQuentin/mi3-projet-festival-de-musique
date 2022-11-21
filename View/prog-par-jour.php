<!DOCTYPE html>
<html lang="fr">

<?php require_once('head.php'); ?>
<?php $nav_active = 'Programmation du jour'; ?>
<body>
	<?php require_once('nav.php'); ?>
	<!-- Contenu principal de la page -->
	<main class="container px-5">
		<h1>Programmation par jour</h1>

		<p class="lead">Cette page affiche la liste des concert par jour du festival 2022 (ordre chronologique).</p>

		<!-- 01/07/2022 -->
		<section class="row my-5">
			<h2 class="text-primary">Vendredi 1 juillet 2022</h2>

			<article class="col-lg-3 col-md-4 col-sm-6 my-2">
				<a href="fiche-artiste.php?id=1" class="lien-card">
					<div class="card">
						<img src="https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/b0144dbf23d597397a0d60bb39ef49ff49f45a69.jpeg" class="card-img-top" alt="Illustration artiste">
						<div class="card-body">
							<h5 class="card-title"><span class='donnee-bdd gras'>Cléa Vincent</span></h5>
							<p class="card-text">
								Heure de début : <span class='donnee-bdd'>18H00</span><br>
								Scène : <span class='donnee-bdd'>La Terrasse</span>
							</p>
						</div>
					</div>
				</a>
			</article>

		</section>

		<!-- 02/07/2022 -->
		<section class="row my-5">
			<h2 class="text-primary">Samedi 2 juillet 2022</h2>
			<article class="col-lg-3 col-md-4 col-sm-6 my-2">
				<a href="fiche-artiste.php?id=7" class="lien-card">
					<div class="card">
						<img src="https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/7c50b32e3b1e42208fdc6df1ad26106c7cbd88d0.jpeg" class="card-img-top" alt="Illustration artiste">
						<div class="card-body">
							<h5 class="card-title"><span class='donnee-bdd gras'>ARABELLA</span></h5>
							<p class="card-text">
								Heure de début : <span class='donnee-bdd'>14H00</span><br>
								Scène : <span class='donnee-bdd'>L'Avant Scène</span>
							</p>
						</div>
					</div>
				</a>
			</article>
		</section>

		<!-- 03/07/2022 -->
		<section class="row my-5">
			<h2 class="text-primary">Dimanche 3 juillet 2022</h2>
			<article class="col-lg-3 col-md-4 col-sm-6 my-2">
				<a href="fiche-artiste.php?id=15" class="lien-card">
					<div class="card">
						<img src="https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/4afc24a470798044c26e489b85484df6009aa88d.jpeg" class="card-img-top" alt="Illustration artiste">
						<div class="card-body">
							<h5 class="card-title"><span class='donnee-bdd gras'>Adèle & Robin</span></h5>
							<p class="card-text">
								Heure de début : <span class='donnee-bdd'>12H00</span><br>
								Scène : <span class='donnee-bdd'>L'Avant Scène</span>
							</p>
						</div>
					</div>
				</a>
			</article>
		</section>
	</main>
</body>

</html>