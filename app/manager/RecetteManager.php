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
        $this->pdo->exec("set names utf8");
        $stmt = $this->pdo->query('SELECT * FROM recette');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOne($id): array
    {
        $this->pdo->exec("set names utf8");
        $stmt = $this->pdo->prepare('SELECT * FROM recette WHERE idRec =:idRec');
        $stmt->bindParam(':idRec', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}