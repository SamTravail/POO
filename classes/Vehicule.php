<?php

abstract class Vehicule
{
    protected int $masse;
    protected float $vitesse;
    protected string $marque;
    protected string $couleur;
    protected array $dimension;
    protected string $modePropulsion;

    // ------------ getter / setter - Masse------------------------------
    public function getMasse(): int
    {
        return $this->masse;
    }

    public function setMasse(int $masse): void
    {
        $this->masse = $masse;
    }


    // ------------ getter / setter - vitesse------------------------------
    public function getVitesse(): float
    {
        return $this->vitesse;
    }

    public function setVitesse(float $vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    // ------------ getter / setter - couleur-------------------------------
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    // ------------ getter / setter - dimension------------------------------
    public function getDimension(): array
    {
        return $this->dimension;
    }

    public function setDimension(array $dimension): void
    {
        $this->dimension = $dimension;
    }

    // ------------ getter / setter - modePropulsion-------------------------
    public function getModePropulsion(): string
    {
        return $this->modePropulsion;
    }

    public function setModePropulsion(string $modePropulsion): void
    {
        $this->modePropulsion = $modePropulsion;
    }

    // ------------ getter / setter - marque---------------------------------
    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    // ------------ fonction pour calculer l'energie Cinetique----------------
    public function calculerEnergieCinetique(): float
    {
        $masseVehicule = $this->masse;
        $vitesseVehicule = $this->vitesse;
        $energieCinetique = 0.5 * ($masseVehicule * ($vitesseVehicule ** 2));
        return $energieCinetique;
    }
}

