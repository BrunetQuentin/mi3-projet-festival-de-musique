
<?php
    // class permetant de gérer la bdd
    class Model {

        // Informations de la base de données
        private $host = "postgresql-pranierb.alwaysdata.net";
        private $db_name = "pranierb_brunetqu_vercorsmusique";
        private $username = "pranierb";
        private $password = "Bsftj8a76m2457N";

        // Propriété qui contiendra l'instance de la connexion
        protected $_connexion;

        // Propriétés permettant de personnaliser les requêtes
        public $table;

        /**
         * construction pour initialiser la base de données
         *
         * @return void
         */
        public function __construct(){
            // On supprime la connexion précédente
            $this->_connexion = null;

            // On essaie de se connecter à la base
            $this->_connexion = pg_connect("host=$this->host port=5432 dbname=$this->db_name user=$this->username password=$this->password")
                or die('Could not connect: ' . pg_last_error());

        }

        // Fonction permetant d'executer une requête
        public function execute($sql, $params = null){
            if($params == null){
                $resultat = $this->_connexion->query($sql);
            }else{
                $resultat = $this->_connexion->prepare($sql);
                $resultat->execute($params);
            }
            return $resultat;
        }

        public function getAll(){
            $sql = "SELECT * FROM " . $this->table;
            echo $this->_connexion;
            $resultat = $this->execute($sql);
            return $resultat->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>