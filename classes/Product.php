<?php
    class Product {
    public $name;
    private $price;
    public $brand;

    public function __construct ($_name, $_price, $_brand) {
        $this->name = $_name;
        $this->price = $_price;
        $this->brand = $_brand;
    }
    ?>