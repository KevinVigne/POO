<?php

class Product2
{
    private string $title;
    private float $price;
    private int $quantity;
    // private const UNIT;

    static function notZero($quantity ,$price): BOOL|float
    {
        if(($quantity > 0) && ($price >0) ){
            $result = $price * $quantity;
            return $result;
        }else{
            return false;
        }
    }
    // public function calculeTotal(self::UNIT,$price,$quantity){

    // }

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


$product = new Product2();
$product->setTitle('table')->setPrice(20)->setQuantity(3);

echo "<p>J'ai acheté " . $product->getQuantity() . " " . $product->getTitle() . " à " . $product->getPrice() . "€ chacune!</p>";

$objet = new Product2();
$objet->setTitle('chaise')->setPrice(240.25)->setQuantity(13);

echo "<p>J'ai acheté " . $objet->getQuantity() . " " . $objet->getTitle() . " à " . $objet->getPrice() . "€ chacune!</p>"; 

echo($product->notZero($product->getQuantity(),$product->getPrice()));