<?php

    global $config;

    /**                **
     * Variables utiles *
     **                **/

    $config['variables']['chemin'] = "../";

    /**              **
     * Détails auteur *
     **              **/


    // BDD
    $config['bdd']['dbname'] = 'devops';
    $config['bdd']['host'] = 'localhost';
    $config['bdd']['username'] = 'root';
    $config['bdd']['password'] = '';
    $config['bdd']['dsn'] = 'mysql:host=' . $config['bdd']['host'] . ';dbname=' . $config['bdd']['dbname'];

    // identité
    $config['auteur']['nom'] = "MINBIELLE";
    $config['auteur']['prenom'] = "Morgan";
    // description
    $config['auteur']['titre'] = "Alternant développeur";
    $config['auteur']['etablissement'] = "CFA AFORP / Ecole Polytechnique";
    $config['auteur']['annee'] = "ETGL P59";

    /**      **
     * Erreur *
     **      **/

    // erreur 401
    $config['erreur']['401'] = "Acces interdit";
    // erreur 402
    $config['erreur']['403'] = "Dossier non accessible";
    // erreur 403
    $config['erreur']['404'] = "Page introuvable";
    // erreur 404
    $config['erreur']['405'] = "Erreur serveur interne";
    // erreur 500
    $config['erreur']['500'] = "Erreur serveur interne";
