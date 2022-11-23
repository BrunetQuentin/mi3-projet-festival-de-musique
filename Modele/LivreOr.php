
<?php

// inclusion du fichier Model.php
require_once 'Model.php';

class LivreOr extends Model{
    public function __construct()
    {
        parent::__construct('Livre_or');
    }

    public function getfirst($number){
        $sql = "SELECT * FROM Livre_or ORDER BY date_post DESC LIMIT $number";
        $result = pg_query($this->_connexion ,$sql);
        return $result;
    }

    public function addMessage($pseudo, $message){
        $ip = $_SERVER['REMOTE_ADDR'];
        $sql = pg_prepare("INSERT INTO Livre_or (pseudo_post, message_post, date_post, ip_post) VALUES ($1, $2, NOW(), $3)");
        $result = pg_execute($this->_connexion, $sql, [$pseudo, $message, $ip]);
        return $result;
    }
}

?>