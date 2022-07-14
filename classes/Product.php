<?php

class Product
{
    public $name;
    public $brand;
    public $price;
    public $quantity;
    public $animal_product;


    public function __construct(string $name_product, string $name_brand, int $price_product, int $quantity, string $animal)
    {
        $this->name = $name_product;
        $this->brand = $name_brand;
        $this->price = $price_product;
        $this->quantity = $quantity;
        $this->animal_product = $animal;
    }


    public function print_Product()
    {
        echo    " <h4>Product: {$this->name}</h4>
					  <ul>
						    <li>Brand: {$this->brand}</li>
						    <li>Price: {$this->price} €</li>
                            <li>Quantity: {$this->quantity}</li>
						    <li>Animal: {$this->animal_product}</li>";
    }
}

?>
