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
        echo 'Coucou';
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
}