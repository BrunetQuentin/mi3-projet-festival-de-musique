<!DOCTYPE html>
<html lang="fr">
<?php require_once "../utils/date.php";?>
<?php require_once('head.php'); ?>
<?php $nav_active = 'Acceuil'; ?>
<body>
	<?php require_once('nav.php'); ?>
  <!-- Contenu principal de la page -->
  <main class="container px-5 mb-5">
    <h1>Récapitulatif de la programmation du festival 2022</h1>

    <p class="lead">
      Cette page affiche un récapitulatif de la programmation du
      <span class="fw-bolder">Vercors Music Festival 2022</span>.
    </p>

    <img src="../images/vercors-music-festival-2022-banniere.png" style="display: block; margin: auto; width: 90%; max-width: 600px" alt="Bannière du Vercors Music Festival 2022">

    <section id="principale" class="row my-3">
      <!-- 1ère Card -->
      <article class="col-lg-6 col-sm-12 my-2">
        <div class="card">
          <h5 class="card-header">3 jours de concerts</h5>
          <div class="card-body">
            <ul>
              <?php
                while($row = pg_fetch_assoc($dateConcerts)){
                  echo "<li>" . dateToFrench($row['date_concert'], 'EEEE dd MMMM yyyy') . " : 
                    <span class='donnee-bdd gras'>" . $row['nbrconcert'] . "</span> concerts à partir de 
                    <span class='donnee-bdd gras'>" . dateToFrench($row['starttime'], "HH mm") . "</span>
                  </li>";
                }
              ?>
            </ul>
          </div>
        </div>
      </article>

      <!-- 2ème Card -->
      <article class="col-lg-6 col-sm-12 my-2">
        <div class="card">
          <h5 class="card-header">3 scènes sur le plateau du Vercors</h5>
          <div class="card-body">
            <ul>
              <?php
                  while($row = pg_fetch_assoc($scenes)){
                    echo "<li>
                      <span class='donnee-bdd gras'>" . $row['nom_scene'] . "</span> (<span class='donnee-bdd'>" . $row['code_postal'] . " " . $row['ville'] . "</span>)
                    </li>";
                  }
                ?>
            </ul>
          </div>
        </div>
      </article>
    </section>

    <hr style="margin: 25px -20px" class="border border-1 opacity-100">

    <section id="livre-or">
      <h2 class="mb-3">Livre d'or du festival 2022</h2>
      <p>
        Vous avez participé au festival et vous avez (fortement) apprécié ?
        Laissez donc un message dans le
        <span class="fw-bolder">Livre d'or</span> !
      </p>

      <div class="card mb-4">
        <h5 class="card-header">Laisser un message dans le Livre d'or</h5>
        <form class="card-body" action="ajout-message-livre-or.php" method="post">
          <div class="mb-3 row">
            <label class="col-md-2 col-form-label required">Pseudo</label>
            <div class="col-md-10">
              <input name="pseudo" type="text" class="form-control" size="50" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-md-2 col-form-label required">Message</label>
            <div class="col-md-10">
              <textarea name="message" class="form-control" rows="2" maxlength="200" required></textarea>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">
              Enregistrer votre message dans le livre d'or
            </button>
          </div>
        </form>
      </div>

      <div class="card">
        <h5 class="card-header">Les 5 derniers messages du Livre d'or</h5>

        <div class="card-body text-center">
          <?php
            while($message = pg_fetch_assoc($messages)){
              echo "<figure>
                <blockquote class='blockquote'>
                  " . $message['message_post'] . "
                </blockquote>
                <figcaption class='blockquote-footer'>
                  <b>" . $message['pseudo_post'] . "</b> (" . dateToFrench($message['date_post'], 'EEEE dd MMMM yyyy à HH mm') . ")
                </figcaption>
              </figure>";
            }
          ?>
        </div>
      </div>
    </section>
  </main>
</body>

</html>