<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->marque = "BMW";
$voiture1->couleur = "vert";

$voiture2 = new Voiture();
$voiture2->couleur = "jaune";
$voiture2->marque = "Mercedes";
$voiture2->demarrer();

var_dump($voiture1);
echo "<br />";
var_dump($voiture2);
