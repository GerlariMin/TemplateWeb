<?php
    session_start();

    include("../ressources/php/fichiers_communs.php");
    include("texte.php");

    global $render;

    $traitement = new TraitementTableauBord($render);
    $traitement->traitementRendu();