<?php


namespace App\Service;


use App\Entity\Recette;
use App\Manager\RecetteManager;
use PDO;

class RecetteService
{
    /**
     * @var RecetteManager
     */
    private $recetteManager;

    public function __construct(PDO $db)
    {
        $this->recetteManager = new RecetteManager($db);
    }

    /**
     * @return Recette[]
     */
    public function findAll(): array
    {
        return $this->recetteManager->findAll();
    }

}