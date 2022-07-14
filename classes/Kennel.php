<?php

class Kennel extends Product
{
    public $size;
    public $color;

    public function __construct(string $name_product, string $name_brand, int $price_product, int $quantity, string $animal, string $taglia, string $Color)
    {
        parent::__construct($name_product, $name_brand, $price_product, $quantity, $animal);
        $this->size = $taglia;
        $this->color = $Color;
    }

    public function print_Product()
    {
        parent::print_Product();
        echo "        <li>Size: {$this->size}</li>
                      <li>Color: {$this->color}</li>
                    </ul>";
    }
}

?>