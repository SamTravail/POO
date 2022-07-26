<?php

class Voiture extends Vehicule
{
    public const CLIGNOTANT = true;
    public int $nbrRoues = 4;
    private string $typeCarrosserie;

    public function savoirSiJaiUnClignotant(): string
    {
        if (self::CLIGNOTANT === true)
            return "J'ai des clignotants";
        else
            return "Je n'ai pas de clignotants";
    }
    
    // ------------ getter / setter - typeCarrosserie---------------------------
    public function getTypeCarrosserie(): string
    {
        return $this->typeCarrosserie;
    }
    public function setTypeCarrosserie(string $typeCarrosserie): void
    {
        $this->typeCarrosserie = $typeCarrosserie;
    }


    // ----------------- methode ----------------------------------------------
    public function demarrer()
    {
        echo "<p>La voiture démarre</p>";
    }

    public function afficherCouleur(): string
    {
        return "<p>La voiture est de couleur " . $this->couleur . "</p>";
    }

}

