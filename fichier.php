<?php

// La fonction file_get_contents() renvoie le contenu d'un fichier sous forme de chaîne de caractères
$contenu = file_get_contents('fichier.txt');
// echo $contenu;

// Affiche directement le contenu d'un fichier
//readfile('fichier.txt');

// $fichier = fopen('fichier.txt', 'r');

// if (fpassthru($fichier)) {

// } else {
//     echo "Morche po";
// }

// fclose($fichier);

if (($handle = fopen("covid.csv", "r")) !== FALSE) {
    $html = "<table style='text-align: center'>";
    $html .= "<thead>";
    $html .= "<tr>";
    $html .= "<th>Département</th>";
    $html .= "<th>Sexe</th>";
    $html .= "<th>Date</th>";
    $html .= "<th>Hospitalisations</th>";
    $html .= "<th>Réanimations</th>";
    $html .= "</tr>";
    $html .= "</thead>";
    $html .= "<tbody>";

    $compteur = 0;

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $html .= "<tr>";

        if ($compteur > 0) {
            for ($c = 0; $c < count($data); $c++) {
                $result = explode(";", $data[$c]);
                $html .= "<td>" . $result[0] . "</td>";
                $html .= "<td>" . $result[1] . "</td>";
                $html .= "<td>" . $result[2] . "</td>";
                $html .= "<td>" . $result[3] . "</td>";
                $html .= "<td>" . $result[4] . "</td>";
            }
        }

        $html .= "</tr>";
        $compteur++;
    }

    fclose($handle);

    $html .= "</tbody>";
    $html .= "</table>";
}

echo $html;