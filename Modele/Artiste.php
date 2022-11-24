
<?php

    // Inclusion du fichier Model.php
    require_once "Model.php";

    class Artiste extends Model{

        // Constructeur
        public function __construct()
        {
            parent::__construct("Artiste");
        }

        /**
         * Obtiens tout les artistes, ordonnés par leurs noms.
         */
        public function getAllSorted(): PgSql\Result|false {
            $sql = 'SELECT * FROM '.$this->table.' ORDER BY nom_artiste';
            $resultat = pg_query($this->_connexion ,$sql);
            return $resultat;
        }

        /**
         * Obtiens un artiste par son identifiant.
         * @param int $id Identifiant de l'artiste.
         */
        public function getById($id): PgSql\Result|false {
            $sql = 'SELECT * FROM '.$this->table.' WHERE id_artiste = '.$id;
            $resultat = pg_query($this->_connexion, $sql);
            return $resultat;
        }
    }

?>