<?php

class Employer
{
    private string $nom;
    private string $poste;
    private int $salaire;

    public function __construct(string $nom, string $poste, int $salaire)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return "nom: $this->nom, poste: $this->poste, et le salaire est $this->salaire.";
    }

    public function __clone()
    {
        $this->salaire *= 1.1;
    }
}

$kevin = new Employer('kevin', 'Développeur', 5000);
echo "<pre>";
var_dump($kevin);
echo "</pre>";

$ilyes = clone $kevin;
echo "<pre>";
var_dump($ilyes);
echo "</pre>";