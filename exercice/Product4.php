<?php

abstract class Product4
{
    private string $title;
    private float $price;
    private int $quantity;

    public function __construct(string $title, float $price, int $quantity)
    {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function calculTotal()
    {
        if (self::verifValeur($this->quantity, $this->price)) {
            return $this->quantity * $this->price;
        } else {
            return "L'une des valeurs n'est pas bonne!";
        }
    }

    static function verifValeur($quantity, $price)
    {
        if (($quantity > 0) && ($price > 0)) {
            return true;
        } else {
            return false;
        }
    }

    //Les SET
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    //LES GET

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
class Meuble extends Product4
{
    private string $color;
    // public function __construct(string $title, float $price, int $quantity, string $color)
    // {
    //     $this->color = $color;
    // }
    public function setColor($color){
        $this->color = $color;
        return $this;
    }
    public function getColor(){
        return $this->color ;
    }
}
class Vetement extends Product4
{
    private string $taille ;
    // public function __construct(string $title, float $price, int $quantity, string $taille)
    // {
    //     $this->taille = $taille;
    // }
    public function setTaille($taille){
        $this->taille = $taille;
        return $this;
    }
    public function getTaille(){
        return $this->taille;
    }
}

$meuble = new Meuble('étagère' ,90 ,1);
$meuble->setColor('rose');
// echo "<pre>";
// var_dump($meuble);
// echo "</pre>";
echo"<p>Nom de l'objet : ". $meuble->getTitle(). "</p>";
echo"<p>Prix de l'objet :".$meuble->getPrice()."</p>";
echo"<p>Quantitée commandée :".$meuble->getQuantity()."</p>";
echo"<p>Couleur :".$meuble->getColor()."</p>";


$veste = new Vetement('Veste',70,3);
$veste->setTaille('M');
echo"<p>Nom du vêtement : ". $veste->getTitle(). "</p>";
echo"<p>Prix du vêtement :".$veste->getPrice()."</p>";
echo"<p>Quantitée commandée :".$veste->getQuantity()."</p>";
echo"<p>Taille :".$veste->getTaille()."</p>";