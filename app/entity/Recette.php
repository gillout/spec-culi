<?php


namespace App\Entity;


class Recette
{
    /**
     * @var
     */
    private $idRec;
    /**
     * @var
     */
    private $libelle;
    /**
     * @var
     */
    private $photo;
    /**
     * @var
     */
    private $type;
    /**
     * @var
     */
    private $pourCombien;
    /**
     * @var
     */
    private $vegetarienne;
    /**
     * @var
     */
    private $idPays;

    /**
     * @return mixed
     */
    public function getIdRec()
    {
        return $this->idRec;
    }

    /**
     * @param mixed $idRec
     */
    public function setIdRec($idRec): void
    {
        $this->idRec = $idRec;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPourCombien()
    {
        return $this->pourCombien;
    }

    /**
     * @param mixed $pourCombien
     */
    public function setPourCombien($pourCombien): void
    {
        $this->pourCombien = $pourCombien;
    }

    /**
     * @return mixed
     */
    public function getVegetarienne()
    {
        return $this->vegetarienne;
    }

    /**
     * @param mixed $vegetarienne
     */
    public function setVegetarienne($vegetarienne): void
    {
        $this->vegetarienne = $vegetarienne;
    }

    /**
     * @return mixed
     */
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * @param mixed $idPays
     */
    public function setIdPays($idPays): void
    {
        $this->idPays = $idPays;
    }


}