<?php

// le mot cl" final bloque la possibilité d'hériter la class
final class Berline extends Voiture
{
    private $nbrPortes =5;

    // ------------ getter / setter - getNbrPortes---------------------------
    public function getNbrPortes(): int
    {
        return $this->nbrPortes;
    }
    public function setNbrPortes(int $nbrPortes): void
    {
        $this->nbrPortes = $nbrPortes;
    }
}
