
<?php
class Product2
{
    private string $title;
    private float $price;
    private int $quantity;

    
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

$product = new Product2;
$product->setQuantity(5)->setPrice(2)->setTitle("Tomate");

echo "<p>J'ai acheté " . $product->getQuantity() . " " . $product->getTitle() . " à " . $product->getPrice() . "€ !</p>";

echo "<p>Pour un total de  " . $product->calculTotal() . "€ !</p>";

$product2 = new Product2;
$product2->setQuantity(-5)->setPrice(2)->setTitle("Cerise");

echo "<p>J'ai acheté " . $product2->getQuantity() . " " . $product2->getTitle() . " à " . $product2->getPrice() . "€ !</p>";

echo "<p>Pour un total de  " . $product2->calculTotal() . "!</p>";
