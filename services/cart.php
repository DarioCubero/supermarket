<?php
// Función para eliminar productos del carrito
if (isset($_POST['remove_from_cart'])) {
    $index = $_POST['product_index'];

    // Eliminar el producto del carrito según el índice
    ; unset($_SESSION['cart'][$index]);

    // Reindexar el array para evitar problemas de índices
    $_SESSION['cart'] = array_values($_SESSION['cart']);

    // Redirigir para evitar el reenvío del formulario
    // header("Location: index.php?pagina=inicio");
    // exit();
}
