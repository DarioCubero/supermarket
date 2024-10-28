<?php

class Order {
    private $order_id;
    private $user_id;
    private $total;
    private $order_status;
    private $order_date;

    public function __construct($user_id, $total) {
        $this->user_id = $user_id;
        $this->total = $total;
        $this->order_status = 'pending'; // Default status
        $this->order_date = date('Y-m-d H:i:s'); // current timestamp
    }

    // Getters
    public function getOrderId() {
        return $this->order_id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getOrderStatus() {
        return $this->order_status;
    }

    public function getOrderDate() {
        return $this->order_date;
    }

    // Setters
    public function setOrderId($order_id) {
        $this->order_id = $order_id;
    }

    // Add additional methods for business logic as needed
}

?>
