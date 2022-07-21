<?php

class Voiture
{
    private string $marque;
    private string $couleur;
    public int $nbrRoues = 4;

    public function __construct(string $couleur, $marque)
    {
        $this->couleur = $couleur;
        $this->marque = $marque;
    }

    // ---------------- get / set  : couleur --------------
    public function getCouleur(): string
    {
        return $this->couleur;
    }
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    // ---------------- get / set  : marque --------------
    public function getMarque(): string
    {
        return $this->marque;
    }
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }


    public function demarrer()
    {
        echo "<p>La voiture démarre</p>";
    }

    public function afficherCouleur()
    {
        echo "<p>La couleur de la voiture est " . $this->couleur . "</p>";
    }

    public function __destruct()
    {
        echo "Coucou, I'm destroyed";
    }
}