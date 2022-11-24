
<?php

// inclusion du fichier Model.php
require_once 'Model.php';

class LivreOr extends Model{
    public function __construct()
    {
        parent::__construct('Livre_or');
    }

    /**
     * Obtient les premiers $number messages dans le livre d'or
     * @param int $number Nombre de messages à obtenir
     * @return array Tableau contenant les messages
     */
    public function getfirst($number){
        $sql = "SELECT * FROM Livre_or ORDER BY date_post DESC LIMIT $number";
        $result = pg_query($this->_connexion ,$sql);
        return $result;
    }

    public function addMessage($pseudo, $message){
        $ip = $_SERVER['REMOTE_ADDR'];

        $sql = pg_prepare($this->_connexion, "messages", "INSERT INTO Livre_or (pseudo_post, message_post, date_post, ip_post) VALUES ($1, $2, NOW(), $3)");
        $result = pg_execute($this->_connexion, "messages", [$pseudo, $message, $ip]);
        return $result;
    }
}

?>