<?php
class Product3
{
    private string $title;
    private float $price;
    private int $quantity;

    public function __construct(string $title , float $price , int $quantity){
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
$product = new Product3('stylo',1.12,5);
echo "<p>Vous avez acheté ".$product->getQuantity()." ". $product->getTitle()." à".$product->getPrice()."€ l'unité</p>";
echo "<p>Pour un total de :". $product->calculTotal()."€</p>";