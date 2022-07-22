<?php

class Vehicule
{
    protected int $masse;
    protected float $vitesse;
    protected string $marque;

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }
}
