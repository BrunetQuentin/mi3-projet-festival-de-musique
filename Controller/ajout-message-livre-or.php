
<?php
    // Pour get_ip()
    require_once '../utils/ip.php';
    // Pour redirect()
    require_once '../utils/redirect.php';
    // Pour ajouter un message dans la base de données
    require_once '../Modele/LivreOr.php';

    // Modèle
    $livreOr = new LivreOr();

    // Paramètres
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];

    // Vérification des paramètres
    if ((is_string($pseudo) === true) && (strlen($pseudo) <= 50) && (strlen(trim($pseudo)) !== 0) && (is_string($message) === true) && (strlen($message) <= 500) && (strlen(trim($message)) !== 0)) {
        $livreOr->addMessage(htmlspecialchars($pseudo, ENT_QUOTES), htmlspecialchars($message, ENT_QUOTES), get_ip());
    }

    // Redirection vers la page principale
    redirect('./index.php')
?>