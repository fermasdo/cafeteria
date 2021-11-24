<?php

class Producte {
    private string $nomProducte;
    private float $preuUnitat;

    public function __construct(string $nom, float $preu)
    {
        $this->nomProducte = $nom;
        $this->preuUnitat = $preu;
    }


    /**
     * Get the value of nomProducte
     */ 
    public function getNomProducte()
    {
        return $this->nomProducte;
    }

    /**
     * Get the value of preuUnitat
     */ 
    public function getPreuUnitat()
    {
        return $this->preuUnitat;
    }
}