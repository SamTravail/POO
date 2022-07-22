<?php

// Fonction permettant le chargement automatique des classes
spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});

$voiture1 = new Voiture("orange");
$voiture1->setMarque("BMW");
var_dump($voiture1);
