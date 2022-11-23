
<?php

    // inclusion du fichier Model.php
    require_once "Model.php";

    class Artiste extends Model{

        public function __construct()
        {
            parent::__construct("Artiste");
        }

        public function getAllSorted() {
            $sql = 'SELECT * FROM '.$this->table.' ORDER BY nom_artiste';
            $resultat = pg_query($this->_connexion ,$sql);
            return $resultat;
        }

        public function getById($id) {
            $sql = 'SELECT * FROM '.$this->table.' WHERE id_artiste = '.$id;
            $resultat = pg_query($this->_connexion, $sql);
            return $resultat;
        }
    }

?>