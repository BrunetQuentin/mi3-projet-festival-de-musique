
<?php
    // fichier permetant d'ajouter un message dans la base de données
    require_once "../Modele/LivreOr.php";
    $livreOr = new LivreOr();
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];
    if (is_string($pseudo === true) && (count($pseudo) <= 50) && (is_string($message) === true) && (count($message) <= 500)) {
        $livreOr->addMessage(htmlspecialchars($pseudo, ENT_QUOTES), htmlspecialchars($message, ENT_QUOTES));
    }
    header("Location: ./index.php");
?>