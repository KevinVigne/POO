<?php
class Employe{
    private string $nom;
    private string $poste;
    private float $salaire;

    public function __construct(string $nom ,string $poste , float $salaire){
        $this->nom = $nom;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }
    public function __toString():string
    {
        return "Nom : ".$this->getNom().", Poste : $this->poste, et son salaire est de $this->salaire €.";
    }
    public function __clone()
    {
        $this->nom =  $this->setNom('Bob');
        $this->poste = $this->setPoste('Secrétaire');
        $this->salaire += 0.1*$this->salaire;
    }


    //Les SET
    public function setNom(string $nom):string
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPoste(string $poste):string
    {
        $this->poste = $poste;
        return $this;
    }

    public function setSalaire(float $salaire):float
    {
        $this->salaire = $salaire;
        return $this;
    }

    //LES GET

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPoste():string
    {
        return $this->poste;
    }

    public function getSalaire():float
    {
        return $this->salaire;
    }
}
$employe1 = new Employe('JimmyBillBob','RH',3000);
var_dump($employe1->__toString());

$employe2 = $employe1->__clone();
echo "<p> Nom : ".$employe2->getNom().", Poste :". $employe2->poste.", et son salaire est de" .$employe2->salaire ."€;</p>";