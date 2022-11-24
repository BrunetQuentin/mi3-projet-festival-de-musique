
<?php
    // Classe permetant de gérer la BDD
    class Model {

        // Informations de la base de données
        private $host = 'postgresql-pranierb.alwaysdata.net';
        private $db_name = 'pranierb_brunetqu_vercorsmusique';
        private $username = 'pranierb';
        private $password = 'Bsftj8a76m2457N';
        private $port = '5432';

        // Propriété qui contiendra l'instance de la connexion
        protected $_connexion;

        // Propriétés permettant de personnaliser les requêtes
        public $table;

        /**
         * Constructeur pour initialiser la base de données
         *
         * @return void
         */
        public function __construct($table){

            $this->table = $table;

            // On supprime la connexion précédente
            $this->_connexion = null;

            // On essaie de se connecter à la base
            $this->_connexion = pg_connect("host=$this->host port=$this->port dbname=$this->db_name user=$this->username password=$this->password")
                or die('Could not connect: ' . pg_last_error());
        }

        /**
         * Fonction permetant d'executer une requête
         * @param string $sql Requête SQL.
         * @param void|array $params Paramètres utilisés lors de l'exécution de la requête
         * @return PgSql\Result|bool Objet contenant les résultats ou false en cas d'erreur.
         */
        public function execute(string $sql, void|array $params = null): PgSql\Result|bool {
            if($params == null){
                $resultat = $this->_connexion->query($sql);
            }else{
                $resultat = $this->_connexion->prepare($sql);
                $resultat->execute($params);
            }
            return $resultat;
        }

        /**
         * Obtiens tout les enregistrements de la table
         * @return PgSql\Result|bool Objet contenant les résultats ou false en cas d'erreur.
         */
        public function getAll(): PgSql\Result|bool {
            $sql = 'SELECT * FROM ' . $this->table;
            $resultat = pg_query($this->_connexion ,$sql);
            return $resultat;
        }
    }
?>