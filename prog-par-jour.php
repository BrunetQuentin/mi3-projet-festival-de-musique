<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Programmation par jour - Vercors Music Festival 2022</title>

	<!-- Inclusion du Favicon du site -->
	<link rel="icon" type="image/x-icon" href="images/favicon-VMF.svg">
	<!-- Inclusion du CSS de Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style>
		/* CSS custom */
		:root {
			--bs-border-width: 2px;
		}

		.donnee-bdd {
			color: #427b73;
			font-size: 1.1em;
		}

		.gras {
			font-weight: bold;
		}

		a.lien-card {
			color: var(--bs-body-color);
			text-decoration: none;
		}

		label.required:after {
			content: " *";
			color: red;
		}
	</style>
</head>

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
					<a href="prog-par-jour.php" class="nav-link active">
						Programmation par jour
					</a>
				</li>
			</ul>
		</div>
	</header>
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

	<!-- Inclusion du JS de Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>