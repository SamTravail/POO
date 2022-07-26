<?php

interface InterfaceFormulaire
{
    public const TVANORMAL = 0.2;
    public function genererFormulaire();
    public function verifierFormulaire();
    public function traiterDonneesFormulaire();
    public function securiserFormulaire();
}