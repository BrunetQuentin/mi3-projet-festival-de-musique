
<?php
    // class permetant de gérer la bdd
    class Modele {
        // variable contenant la connexion à la bdd
        private $bdd;
        // constructeur
        public function __construct() {
            // connexion à la bdd
            $this->bdd = new PDO('mysql:host=localhost;dbname=nom_de_la_bdd;charset=utf8', 'nom_utilisateur', 'mot_de_passe');
        }
        
        function getAllArtistes() {
            // requête sql
            $sql = "SELECT * FROM artistes";
            // préparation de la requête
            $req = $this->bdd->prepare($sql);
            // exécution de la requête
            $req->execute();
            // récupération des données
            $resultat = $req->fetchAll();
            // retourne le résultat
            return $resultat;
        }
    }
?>