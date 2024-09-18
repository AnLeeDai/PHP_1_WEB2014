<?php

namespace lab_2;

class Product
{
    public $name;
    public $price;
    public $quantity;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getInfo()
    {
        return "name: " . $this->name . '<br>' . 'age: ' . $this->price . '<br>' . 'address: ' . $this->quantity;
    }

    public function caculateTotal()
    {
        return $this->price * $this->quantity;
    }
}

$product = new Product();
$product->setName('An');
$product->setQuantity(20);
$product->setPrice(10);

echo $product->getInfo() . '<br>';
echo "Total: $" . $product->caculateTotal();
