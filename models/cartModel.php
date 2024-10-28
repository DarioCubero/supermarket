<?php

class Cart {
    private $cart_id;
    private $user_id;
    private $product_id;
    private $quantity;
    private $added_at;

    public function __construct($user_id, $product_id, $quantity = 1) {
        $this->user_id = $user_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->added_at = date('Y-m-d H:i:s'); // current timestamp
    }

    // Getters
    public function getCartId() {
        return $this->cart_id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getProductId() {
        return $this->product_id;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getAddedAt() {
        return $this->added_at;
    }

    // Setters
    public function setCartId($cart_id) {
        $this->cart_id = $cart_id;
    }

    // Add additional methods for business logic as needed
}

?>
