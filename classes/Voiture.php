<?php

class Voiture extends Vehicule
{
    public int $nbrRoues = 4;

    /* public function __construct(string $couleur)
     {
         $this->couleur = $couleur;
     }
 */

    public function demarrer()
    {
        echo "<p>La voiture démarre</p>";
    }

    public function afficherCouleur(): string
    {
        return "<p>La voiture est de couleur " . $this->couleur . "</p>";
    }

    /*
        public function __destruct()
        {
            echo "<p>Coucou, I'm destroyed</p>";
        }
    */
}

