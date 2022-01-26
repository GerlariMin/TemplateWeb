<?php
/**
 * Classe TraitementTableauBord
 */
class TraitementTableauBord
{

    /**
     * @var Render render
     */
    private Render $render;
    /**
     * @var array config
     */
    private array $config;
    /**
     * @var TexteTableauBord texte
     */
    private TexteTableauBord $texte;

    /**
     * Traitement_Accueil constructor.
     *
     * @param Render $rendu
     */
    public function __construct(Render $rendu)
    {
        $this->render = $rendu;
        global $config;
        $this->config = $config;
        $this->texte = new TexteTableauBord($this->config);
    }

    /**
     * Affichage de la page de connexion.
     */
    public function traitementRendu(): void
    {
        $data = $this->texte->texteFinal();

        $data['chemin'] = $this->config['variables']['chemin'];
        $data['dashboard'] = true;

        $this->render->actionRendu($data);
    }

}