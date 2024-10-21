<?php
require_once './config.php';

class CartController {
    // Añadir un producto al carrito
    public function addToCart($user_id, $product_id, $quantity) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, ?)
                                ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)");
        return $stmt->execute([$user_id, $product_id, $quantity]);
    }

    // Obtener el carrito de un usuario
    public function getCart($user_id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT c.*, p.name, p.price FROM cart c 
                                JOIN products p ON c.product_id = p.product_id 
                                WHERE c.user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Eliminar un producto del carrito
    public function removeFromCart($cart_id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM cart WHERE cart_id = ?");
        return $stmt->execute([$cart_id]);
    }

    // Vaciar el carrito
    public function clearCart($user_id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM cart WHERE user_id = ?");
        return $stmt->execute([$user_id]);
    }
}
?>
