<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liste des artistes - Vercors Music Festival 2022</title>

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
					<a href="liste-artistes.php" class="nav-link active">
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

	<!-- Inclusion du JS de Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>