<?php


namespace App\Ctrl;


use App\Service\RecetteService;
use App\Entity\Recette;
use PDO;

class RecetteCtrl
{
    /**
     * @var RecetteService
     */
    private $recetteService;

    public function __construct(PDO $db)
    {
        $this->recetteService = new RecetteService($db);
    }

    public function index()
    {

    }

    public function show($id)
    {

    }

    public function add(Recette $recette)
    {

    }

    public function delete($id)
    {

    }

    public function update(Recette $recette)
    {

    }

    public function list()
    {
        $recettes = $this->recetteService->findAll();
        $this->render('recette.list', compact('recettes'));
    }

    /**
     * Permet d'envoyer à la vue $view les données passées en paramètres
     * @param string $view Correspond au nom de la vue à appeler formatée de la form "module.nomDeLaVue"
     * @param array $attributes Correspond à tous les paramètres passées sous forme de tableau "clef=>valeur" de façon à ce qu'ils soient retrouvés dans la vue "$clef = valeur"
     */
    public function render(string $view, $attributes = [])
    {
        ob_start();
        extract($attributes);
        // $view = 'recette.show'; => view/recette/show.php
        require dirname(__DIR__) . '/view' . '/' . str_replace('.', '/', $view) . '.php';
        $content = ob_get_clean();
        require dirname(__DIR__) . '/view/template.php';

        /*
        $attributes = compact('recette', 'recettes'); // ['recette' => 'test', 'recettes' => 'listetest']
        extract($attributes); // $recette = 'test'; $recettes = 'listetest';
        */
    }
}