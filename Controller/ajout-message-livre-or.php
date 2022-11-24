
<?php
    // Pour redirect()
    require_once '../utils/redirect.php'
    // Pour ajouter un message dans la base de données
    require_once '../Modele/LivreOr.php';

    // Modèle
    $livreOr = new LivreOr();

    // Paramètres
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];

    // Vérification des paramètres
    if (is_string($pseudo === true) && (count($pseudo) <= 50) && (is_string($message) === true) && (count($message) <= 500)) {
        $livreOr->addMessage(htmlspecialchars($pseudo, ENT_QUOTES), htmlspecialchars($message, ENT_QUOTES));
    }

    // Redirection vers la page principale
    redirect('./index.php')
?>