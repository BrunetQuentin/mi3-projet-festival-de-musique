
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
        $sql = 'SELECT * FROM Concert WHERE id_artiste = '.$id;
        $resultat = pg_query($this->_connexion, $sql);
        return $resultat;
    }

    public function getArtistsOfConcertsGroupByDate(){
        $sql = "SELECT date_concert FROM Concert GROUP BY date_concert ORDER BY date_concert";
        $dates = pg_query($this->_connexion, $sql);

        $result = array();

        while($date = pg_fetch_row($dates)){
            $sql = "SELECT c.heure_debut_concert, c.id_scene, c.id_artiste, a.nom_artiste, a.lien_illustration, s.nom_scene
            FROM Concert as c, Artiste as a, Scene as s WHERE date_concert = '".$date[0]."' AND c.id_artiste = a.id_artiste AND c.id_scene = s.id_scene ORDER BY heure_debut_concert";

            $concerts = pg_query($this->_connexion, $sql);

            array_push($result, array(
                'date' => $date[0],
                'concerts' => $concerts,
            ));
        }
        return $result;
    }
}

?>