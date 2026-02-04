<?php

namespace Eleves\ProjetNasa\src;

class Fusee
{
    private  $nom;
    private $niveauCarburant = 0;
    private  $equipage = [];
    private  $estLancee = false;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function ajouterCarburant(float $litres): void
    {
        if ($litres < 0) {
            throw new \Exception("Pas de siphonage !");
        }

        $this->niveauCarburant += $litres;
    }

    public function embarquerAstronaute(string $nom): void
    {
        $this->equipage[] = $nom;
    }

    public function getEquipage(): array
    {
        return $this->equipage;
    }

    public function decoller(): string
    {
        if ($this->niveauCarburant < 100) {
            return "Echec";
        }

        $this->estLancee = true;
        return "Succès";
    }

    public function calculerPortee(float $fuel): float
    {
        return $fuel * 2.5;
    }
}
