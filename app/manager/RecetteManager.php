<?php


namespace App\Manager;


use PDO;

class RecetteManager
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * RecetteManager constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {

    }


}