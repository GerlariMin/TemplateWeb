<?php

    class Model {
        private PDO $bdd;
        private array $config;
        private static ?Model $instance = null;

        private function __construct($config)
        {
            $this->config = $config;
            try{
                $this->bdd = new PDO($this->config['bdd']['dsn'], $this->config['bdd']['username'], $this->config['bdd']['password']);
            }catch(PDOException $e){
                $erreur = 'Connexion échouée: '. $e->getMessage();
                error_log($erreur);
            }
        }

        public static function get_model($config): ?Model
        {
            if(is_null(self::$instance)){
                self::$instance = new Model($config);
            }
            return self::$instance;
        }

        public function recupererUtilisateur($login, $motDePasse): mixed
        {
            $req = $this->bdd->prepare("SELECT utilisateur_Civilite AS CIVILITE, utilisateur_Nom AS NOM, utilisateur_Prenom AS PRENOM FROM utilisateur WHERE utilisateur_Login = :login AND utilisateur_Password = :motDePasse;");
            $req->bindValue(":login", $login);
            $req->bindValue(":motDePasse", $motDePasse);
            $req->execute();

            return $req->fetch(PDO::FETCH_ASSOC);
        }

    }
