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
        $results = $this->recetteManager->findAll();
        /*
        Peut être remplacé par :
        return is_array($results) ? array_map([$this, 'convert'], $results) : [] ;
        */
        $recettes = [];
        if (is_array($results)) { // Le contenu du if peut etre remplacer
            foreach ($results as $result) {
                $recettes[] = $this->convert($result);
            }
        }
        return $recettes;
    }

    /**
     *
     */
    public function findOne($id): Recette
    {
        $result = $this->recetteManager->findOne($id);
        return $this->convert($result);
    }

    /**
     * Convertie un tableau associatif contenant une recette sous la forme clef=>valeur en objet Recette
     * @param array $recette
     * @return Recette
     */
    private function convert(array $recette): Recette
    {
        $obj = new Recette();
        foreach ($recette as $key=>$value) {
            $setter = 'set' . ucfirst($key);
            if (!is_null($value) && method_exists($obj, $setter)) {
                $obj->$setter($value);
            }
        }
        return $obj;
    }

}