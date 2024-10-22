<?php
//Controlers
require_once 'controllers/UserController.php';
// require_once 'controllers/ProductController.php';
// require_once 'controllers/OrderController.php';
// require_once 'controllers/CartController.php';

//Views
include_once 'views/partials/header.php';
include_once 'views/partials/content.php';
include_once 'views/partials/footer.php';

// $userController = new UserController();
// $productController = new ProductController();
// $orderController = new OrderController();
// $cartController = new CartController();

// Registrar un nuevo usuario
// $userController->register('testuser', 'test@example.com', 'password123');

// // Iniciar sesión
// $user = $userController->login('test@example.com', 'password123');
// if ($user) {
//     echo "Logged in as: " . $user['username'] . "<br>";

//     // 1 Create a new product
//     $productController->createProduct('Product 1', 'Description of Product 1', 10.99, 100);

//     // 2 Get all products
//     $products = $productController->getProducts();
//     echo "Products:<br>";
//     print_r($products);

//     // 3 Create a new order
//     $orderController->createOrder($user['user_id'], 30.00);

//     // 4 Add to cart
//     $cartController->addToCart($user['user_id'], 1, 2); // Add 2 of product with ID 1
// } else {
//     echo "Login failed.";
// }
