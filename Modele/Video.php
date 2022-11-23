
<?php

// inclusion du fichier Model.php
require_once "Model.php";

class Video extends Model{

	public function __construct()
	{
		parent::__construct("Video");
	}

    public function getByArtistId($id) {
        $sql = 'SELECT * FROM '.$this->table.' WHERE id_artiste = '.$id;
        $resultat = pg_query($this->_connexion, $sql);
        return $resultat;
    }
}

?>