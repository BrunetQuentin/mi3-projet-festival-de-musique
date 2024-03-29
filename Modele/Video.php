
<?php

// Inclusion du fichier Model.php
require_once 'Model.php';

class Video extends Model{

    // Constructeur
	public function __construct()
	{
		parent::__construct('Video');
	}

    /**
     * Obtiens toute les vidéos d'un artiste par son identifiant.
     * @param int $id Identifiant de l'artiste.
     * @return PgSql\Result|bool Objet contenant les résultats ou false en cas d'erreur.
     */
    public function getByArtistId(int $id): PgSql\Result|bool {
        $sql = 'SELECT * FROM '.$this->table.' WHERE id_artiste = '.$id;
        $resultat = pg_query($this->_connexion, $sql);
        return $resultat;
    }
}

?>