<?php

$paris = new DateTimeZone('Europe/Paris');
var_dump($paris);
?>
<br>
<?php
$australie = new DateTimeZone('Australia/Melbourne');
var_dump($australie->getName(), $australie->getLocation());

$maintenant = new DateTime();
var_dump($maintenant);
?>
    <br>
<?php
$samuel = new DateTime('1978-02-18 16:08:00', $paris);

var_dump($samuel);
?>
    <br>
<?php
$vendrediProchain = new DateTime('next friday');
var_dump($vendrediProchain);