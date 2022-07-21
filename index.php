<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture();
//$voiture1->couleur = "rouge";
$voiture1->setCouleur("rouge");
echo $voiture1->getCouleur();
//$voiture1->marque = "BMW";
$voiture1->setMarque("BMW");
echo $voiture1->getMarque();
$couleurVoiture1 = $voiture1->afficherCouleur();
echo $couleurVoiture1;

$voiture2 = new Voiture();
$voiture1->setCouleur("jaune");
echo $voiture1->getCouleur();
$voiture2->setMarque("BMW");
echo $voiture2->getMarque();

$voiture2->demarrer();

// var_dump($voiture1);
// echo "<br />";
// var_dump($voiture2);
