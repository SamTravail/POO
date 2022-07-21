<?php

require_once './classes/Voiture.php';

// ---------------------- Voiture 1 -----------

$voiture1 = new Voiture("orange", "BMW");

//$voiture1->marque = "BMW";
//$voiture1->setMarque("BMW");
echo $voiture1->getMarque();

//$voiture1->couleur = "rouge";
$voiture1->setCouleur(" rouge");
echo $voiture1->getCouleur();

echo "<br />";

// ---------------------- Voiture 2 -----------

$voiture2 = new Voiture(" Jaune", "Honda");

echo $voiture2->getMarque();
echo $voiture2->getCouleur();

$voiture2->demarrer();
echo "<br />";

// var_dump($voiture1);
// echo "<br />";
// var_dump($voiture2);
