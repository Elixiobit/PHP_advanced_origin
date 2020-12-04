<?php

namespace app\models;

class Product extends Record
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;

    public function getShortDescription()
    {
        
    }

    public function getPrice(Discount $discount)
    {
        return $this->price - $discount->getDiscount();
    }
}