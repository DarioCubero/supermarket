<?php

class User {
    private $user_id;
    private $username;
    private $email;
    private $password;
    private $created_at;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->created_at = date('Y-m-d H:i:s'); // current timestamp
    }

    // Getters
    public function getUserId() {
        return $this->user_id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    // Setters
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    // Add additional methods for business logic as needed
}

?>
