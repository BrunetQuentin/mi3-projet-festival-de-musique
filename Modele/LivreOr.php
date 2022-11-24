
<?php

// Inclusion du fichier Model.php
require_once 'Model.php';

class LivreOr extends Model{

    // Constructeur
    public function __construct()
    {
        parent::__construct('Livre_or');
    }

    /**
     * Obtiens les n premiers enregistrements du livre d'or.
     * @param int $number Valeur de n.
     * @return PgSql\Result|bool Objet contenant les résultats ou false en cas d'erreur.
     */
    public function getfirst($number): PgSql\Result|bool {
        $sql = "SELECT * FROM Livre_or ORDER BY date_post DESC LIMIT $number";
        $result = pg_query($this->_connexion ,$sql);
        return $result;
    }

    /**
     * Rajoute un enregistrement dans le livre d'or.
     * @param string $pseudo Pseudonyme de l'auteur.
     * @param string $message Contenu de l'enregistrement.
     * @return PgSql\Result|bool Objet contenant les résultats ou false en cas d'erreur.
     */
    public function addMessage($pseudo, $message): PgSql\Result|bool {
        $ip = $_SERVER['REMOTE_ADDR'];
        $sql = pg_prepare("INSERT INTO Livre_or (pseudo_post, message_post, date_post, ip_post) VALUES ($1, $2, NOW(), $3)");
        $result = pg_execute($this->_connexion, $sql, [$pseudo, $message, $ip]);
        return $result;
    }
}

?>