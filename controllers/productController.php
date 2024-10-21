<?php
require_once './config.php';

class ProductController {
    // Crear un nuevo producto
    public function createProduct($name, $description, $price, $stock) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO products (name, description, price, stock) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $description, $price, $stock]);
    }

    // Listar todos los productos
    public function getProducts() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Actualizar un producto
    public function updateProduct($product_id, $name, $description, $price, $stock) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE products SET name = ?, description = ?, price = ?, stock = ? WHERE product_id = ?");
        return $stmt->execute([$name, $description, $price, $stock, $product_id]);
    }

    // Eliminar un producto
    public function deleteProduct($product_id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM products WHERE product_id = ?");
        return $stmt->execute([$product_id]);
    }
}
?>
