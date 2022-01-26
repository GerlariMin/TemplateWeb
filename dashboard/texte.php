<?php

/**
 * Classe TexteTableauBord
 * Contient l'ensemble du texte à afficher pour la page de connexion.
 */
class TexteTableauBord
{
    /**
     * Variables correspondant aux balises Mustache de la page.
     */

    /**
     * @var array
     */
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    private function texteDonnees(): array
    {
        return
            [
                'utilisateur' => $_SESSION['civilite'] . ' ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'],
                'login' => $_SESSION['login'],
                'nom' => $_SESSION['nom'],
                'prenom' => $_SESSION['prenom'],
                'civilite' => $_SESSION['genre'],
            ];
    }

    /**
     * Retourne le tableau formaté final utilisé pour générer le rendu intégral.
     *
     * @return array
     */
    public function texteFinal():array
    {
        return
            [
                "donnees" => $this->texteDonnees()
            ];
    }

}
