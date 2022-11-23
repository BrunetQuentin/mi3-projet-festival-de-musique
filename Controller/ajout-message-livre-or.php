
<?php
    // fichier permetant d'ajouter un message dans la base de données
    require_once "../Modele/LivreOr.php";
    $livreOr = new LivreOr();
    $livreOr->addMessage($_POST['pseudo'], $_POST['message']);
    header("Location: ./index.php");
?>