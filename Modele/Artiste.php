
<?php

    // inclusion du fichier Model.php
    require_once "Model.php";

    class Artiste extends Model{
        public function __construct()
        {
            parent::__construct();
            $this->table = "Artiste";
        }
    }

?>