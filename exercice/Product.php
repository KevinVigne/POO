<?php
    class Product{
        public  string $title;
        public float $price;
        public int $quantity;
        public float $total;

        public function totalProduct(): float
        {
            $this->total = $this->price * $this->quantity;
            return $this->total;
        }
    }
    //initialisation de l'instance de "Product" dans $product
    $product = new Product();
    //Affectation de Valeur de $product
    $product->title ="Boite en carton";
    $product->price = 3.02;
    $product->quantity = 10;
    $product->totalProduct();

    //initialisation de l'instance de "Product" dans $product2
    $product2 = new Product();

    //Affectation de Valeur de $product2
    $product2->title ="Balle de Football";
    $product2->price = 5.36;
    $product2->quantity = 2;
    $product2->totalProduct();

    //Affichage du total des deux produit $product et $product2
    //echo("<p>Nom du produit : " .$product->title . " Quantitée : " . $product->quantity . " prix: ". $product->price. "€ prix total : ".$product->total . "€</p>" );
    echo("<p>Vous avez acheté $product->title  en $product->quantity exemplaires  à $product->price €  l'unité pour un total de $product->total €</p>");
    //echo("<p>Nom du produit : ". $product2->title .  " quantitée :  ".$product2->quantity .   " prix: ". $product2->price. "€ prix total : ". $product2->total ." €</p>" );
    echo("<p>Vous avez acheté $product2->title  en $product2->quantity exemplaires  à $product2->price €  l'unité pour un total de $product2->total €</p>");
   
   

    