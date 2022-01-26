<?php
session_start();

    if(array_key_first($_GET))
    {
        switch(strtolower(array_key_first($_GET)))
        {
            case 'accueil':
                header("Location: ./accueil/");
                break;

            case 'connexion':
                header("Location: ./connexion/");
                break;

            case 'deconnexion':
                header("Location: ./deconnexion/");
                break;

            case 'dashboard':
                if(isset($_SESSION['login'])) {
                    header("Location: ./dashboard/");
                } else {
                    header("Location: ./connexion/");
                }
                break;

            default:
                header("Location: ./erreur/");
                break;
        }
    }
    else
    {
        header("Location: ./accueil/");
        exit();
    }

?>