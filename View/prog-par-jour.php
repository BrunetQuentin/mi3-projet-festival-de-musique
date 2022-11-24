<!DOCTYPE html>
<html lang="fr">

<?php require_once('../utils/date.php'); ?>
<?php require_once('head.php'); ?>
<?php $nav_active = 'Programmation du jour'; ?>
<body>
	<?php require_once('nav.php'); ?>
	<!-- Contenu principal de la page -->
	<main class="container px-5">
		<h1>Programmation par jour</h1>

		<p class="lead">Cette page affiche la liste des concert par jour du festival 2022 (ordre chronologique).</p>

		<?php 
			foreach ($concerts as $concert){
				echo "<section class='row my-5'>
						<h2 class='text-primary'>".ucfirst(dateToFrench($concert['date'], 'EEEE d MMMM yyyy'))."</h2>";
				
				while($con = pg_fetch_assoc($concert['concerts'])){
					echo "<article class='col-lg-3 col-md-4 col-sm-6 my-2'>
								<a href='fiche-artiste.php?id=". $con['id_artiste'] ."' class='lien-card'>
									<div class='card'>
										<img src='". $con['lien_illustration'] ."' class='card-img-top' alt='Illustration artiste'>
										<div class='card-body'>
											<h5 class='card-title'>
												<span class='donnee-bdd gras'>". $con['nom_artiste'] ."</span>
											</h5>
											<p class='card-text'>
												Heure de début : <span class='donnee-bdd'>". dateToFrench($con['heure_debut_concert'], "HH") ."H". dateToFrench($con['heure_debut_concert'], "mm") ."</span><br>
												Scène : <span class='donnee-bdd'>". $con['nom_scene'] ."</span>
											</p>
										</div>
									</div>
								</a>
							</article>";
				}
				echo "</section>";
			}
		?>
	</main>
</body>

</html>