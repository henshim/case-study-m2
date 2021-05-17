<?php


namespace App\Model;

class Product
{
    public $productName;
    public $price;
    public $status;
    public $description;
    public $img;
    public $category;

    function __construct($productName, $price, $status, $description, $img,$category)
    {
        $this->productName = $productName;
        $this->price = $price;
        $this->status = $status;
        $this->description = $description;
        $this->img = $img;
        $this->category=$category;
        //$this->supplier=$supplier;
    }
}