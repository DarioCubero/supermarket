<?php
require_once './config.php';

class OrderController {
    // Crear una nueva orden
    public function createOrder($user_id, $total) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO orders (user_id, total) VALUES (?, ?)");
        return $stmt->execute([$user_id, $total]);
    }

    // Listar órdenes de un usuario
    public function getOrdersByUser($user_id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM orders WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
