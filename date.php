<?php

$paris = new DateTimeZone('Europe/Paris');
var_dump($paris);
?><br><br><?php
$australie = new DateTimeZone('Australia/Melbourne');
var_dump($australie->getName(), $australie->getLocation());

$maintenant = new DateTime();
var_dump($maintenant);
?><br><br><?php

$samuel = new DateTime('1978-02-18 16:08:00');
$now = new DateTime();
$difference = $now->diff($samuel);

echo $difference->format('%y ans, %m mois et %d jours');
?><br><br><?php

$vendrediProchain = new DateTime('next friday');
var_dump($vendrediProchain);
?><br><br><?php

//echo strtotime('now');
// Instancier un objet DateTime depuis un timestamp Unix
$timestamp = new DateTime('@1658914830');
?><br><br><?php

$formatSpecifique = DateTime::createFromFormat('G/i/s:j/m/Y-u', '7/32/12:3/1/2016-5687');
var_dump($formatSpecifique);
?><br><br><?php

