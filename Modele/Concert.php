
<?php

// inclusion du fichier Model.php
require_once "Model.php";

class Concert extends Model{
    public function __construct()
    {
        parent::__construct("Concert");
    }

    public function getDateOfConcert(){
        $sql = "SELECT date_concert, count(*) as nbrConcert, MIN(heure_debut_concert) as startTime FROM " . $this->table . " GROUP BY date_concert ORDER BY date_concert";
        $resultat = pg_query($this->_connexion ,$sql);
        return $resultat;
    }

    public function getByArtistId($id) {
        $sql = 'SELECT * FROM '.$this->table.' WHERE id_artiste = '.$id;
        $resultat = pg_query($this->_connexion, $sql);
        return $resultat;
    }
}

?>