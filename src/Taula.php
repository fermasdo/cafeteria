<?php

/**
 * Guarda els productes demanats en una taula del restaurant.
 */
class Taula
{
    // Identificador de la taula
    private int $numTaula;
    // 
    private bool $pagat;
    // Conjunt de productes demanats en la taula
    private array $productes;
    private int $comensals;

    public function __construct(int $numTaula)
    {
        $this->numTaula = $numTaula;
        $this->pagat = FALSE;
        $this->productes = array();
    }

    public function afegirProducte(Producte $p)
    {
        array_push($this->productes, $p);
    }


    /**
     * Get the value of numTaula
     */
    public function getNumTaula()
    {
        return $this->numTaula;
    }

    /**
     * Get the value of productes
     */
    public function getProductes()
    {
        return $this->productes;
    }

    /**
     * Get the value of pagat
     */
    public function getPagat()
    {
        return $this->pagat;
    }
}
