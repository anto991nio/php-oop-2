<?php

class Product
{
    public $name;
    public $brand;
    public $price;

    function __construct($name, $brand, $price)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setPrice($price);
    }

    function setName($value){
        $this->name =$value;
    }
    function setBrand($value){
        $this->brand =$value;
    }
    function setPrice($value){
        $this->price =$value;
    }

    public function renderProduct() {
        echo "<h2>Nome Prodotto:" . " " . $this->name . "</h2>";
        echo "<h2>Brand:" . " " . $this->brand .  "</h2>";
        echo "<p>Prezzo:" . " " . $this->price .  "</p>";
      

      }
}
