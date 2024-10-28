<?php

class Product {
    private $product_id;
    private $name;
    private $description;
    private $price;
    private $stock;
    private $created_at;

    public function __construct($name, $description, $price, $stock) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->created_at = date('Y-m-d H:i:s'); // current timestamp
    }

    // Getters
    public function getProductId() {
        return $this->product_id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    // Setters
    public function setProductId($product_id) {
        $this->product_id = $product_id;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }

    // Add additional methods for business logic as needed
}

?>
