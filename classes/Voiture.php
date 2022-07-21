<?php

class Voiture {
    private string $marque;
    private string $couleur;
    public int $nbrRoues = 4;

    public function getCouleur(): string{
        return $this->couleur;
    }
    public function setCouleur(string $couleur): void{
        $this->couleur = $couleur;
    }
    public function getMarque(): string{
        return $this->marque;
    }
    public function setMarque(string $marque): void{
        $this->marque = $marque;
    }

    public function demarrer() {
        echo "<p>La voiture démarre</p>";
    }

    public function afficherCouleur()
    {
        echo "<p>La couleur de la voiture est " . $this->couleur . "</p>";
    }
}