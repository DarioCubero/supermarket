<?php

class OrderItem {
    private $order_item_id;
    private $order_id;
    private $product_id;
    private $quantity;
    private $price;

    public function __construct($order_id, $product_id, $quantity, $price) {
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    // Getters
    public function getOrderItemId() {
        return $this->order_item_id;
    }

    public function getOrderId() {
        return $this->order_id;
    }

    public function getProductId() {
        return $this->product_id;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    // Setters
    public function setOrderItemId($order_item_id) {
        $this->order_item_id = $order_item_id;
    }

    // Add additional methods for business logic as needed
}

?>
