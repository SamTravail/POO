<?php

class Voiture {
    public string $marque;
    public string $couleur;
    public int $nbrRoues = 4;

    public function demarrer() {
        echo "<p>La voiture démarre</p>";
    }
}