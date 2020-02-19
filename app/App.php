<?php


namespace App;


use PDO;

class App
{
    /**
     * @var App
     */
    private static $instance; // Instance unique de la classe
    /**
     * @var string
     */
    private $titre = 'Spécialités culinaires';
    /**
     * @var PDO
     */
    private $db;

    private function __construct()
    {
        // Constructeur privé pour empêcher la création de nouvelles instances de la classe
    }

    /**
     * @return mixed
     */
    public static function getInstance(): App
    {
        if (is_null(self::$instance)) {
            self::$instance = new App();
        }
        return self::$instance;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @return PDO
     */
    public function getDb(): PDO
    {
        if (is_null($this->db)) {
            $this->db = new PDO('', '', '', []);
        }
        return $this->db;
    }


}