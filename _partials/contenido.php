<!-- contenido.php -->
<?php

// var_dump($_GET['pagina']);
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];

    switch ($pagina) {
        case 'inicio':
            include 'producto.php';
            break;
        case 'contacto':
            include 'contact.php';
            break;
        case 'producto':
            include 'producto.php'; 
            break;
        case 'portfolio':
            include 'portfolio.php'; 
            break;
        case 'about-us':
            include 'about-us.php'; 
            break;
        default:
            include 'error.php';
            break;
    }
} else {
    include 'index.php';
}
?>