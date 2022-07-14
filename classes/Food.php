<?php

class Food extends Product
{
    public $weight_g;

    public function __construct(string $name_product, string $name_brand, int $price_product, int $quantity, string $animal, int $weight)
    {
        parent::__construct($name_product, $name_brand, $price_product, $quantity, $animal);
        $this->weight_g = $weight;
    }


    public function print_Product()
    {
        parent::print_Product();
        echo "        <li>Weight: {$this->weight_g} g</li>
                    </ul>";
    }
}

?>