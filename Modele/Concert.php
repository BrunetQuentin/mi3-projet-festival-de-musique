
<?php

// Inclusion du fichier Model.php
require_once "Model.php";

class Concert extends Model{

    // Constructeur
    public function __construct()
    {
        parent::__construct("Concert");
    }

    /**
     * Obtiens les dates, ainsi que le nombre de concerts pour chaque dates.
     * @return PgSql\Result|bool Objet contenant les résultats ou false en cas d'erreur.
     */
    public function getDateOfConcert(): PgSql\Result|bool {
        $sql = "SELECT date_concert, count(*) as nbrConcert, MIN(heure_debut_concert) as startTime FROM " . $this->table . " GROUP BY date_concert ORDER BY date_concert";
        $resultat = pg_query($this->_connexion ,$sql);
        return $resultat;
    }

    /**
     * Obtiens tout les concerts d'un artiste.
     * @param int $id Identifiant de l'artiste.
     * @return PgSql\Result|bool Objet contenant les résultats ou false en cas d'erreur.
     */
    public function getByArtistId($id): PgSql\Result|bool {
        $sql = 'SELECT * FROM Concert WHERE id_artiste = '.$id ;
        $resultat = pg_query($this->_connexion, $sql);
        return $resultat;
    }

    /**
     * Obtiens les concerts des artistes et la scène en fonction de la date de concert.
     * @return array Tableau contenant les objets contenant les résultats ou false à la place de l'objet en cas d'erreur.
     */
    public function getArtistsOfConcertsGroupByDate(): array {
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