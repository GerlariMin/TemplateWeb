<?php
    session_start();

    $formulaire = $_POST;
    $login = $formulaire['login'];
    $password = $formulaire['password'];

    if(isset($login) && isset($password)){
        session_regenerate_id();
        include("../ressources/config/config.inc.php");
        global $config;
        include($config['variables']['chemin'] . "ressources/php/Model.php");

        $model = Model::get_model($config);
        $utilisateur = $model->recupererUtilisateur($login, $password);
        if($utilisateur !== false){
            $_SESSION['login'] = $login;
            $_SESSION['nom'] = $utilisateur['NOM'];
            $_SESSION['prenom'] = $utilisateur['PRENOM'];
            $_SESSION['genre'] = $utilisateur['CIVILITE'];
            switch ($utilisateur['CIVILITE']){
                case 'homme':
                    $_SESSION['civilite'] = "Mr.";
                    break;
                case 'femme':
                    $_SESSION['civilite'] = "Mme";
                    break;
                default:
                    $_SESSION['civilite'] = "";
                    break;
            }
            header("Location: ../dashboard/");
        } else {
            header("Location: ../erreur/?erreur=u404");
        }
        exit();
    } else {
        header("Location: ../accueil/");
        exit();
    }