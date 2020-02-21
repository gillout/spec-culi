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
        $recettes = $this->recetteService->findAll();
        $this->render('recette.index', compact('recettes'));
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

    }

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