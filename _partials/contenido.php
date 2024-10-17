<!-- contenido.php -->
<?php
// var_dump($_GET['pagina']);
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];

    switch ($pagina) {
        case 'inicio':
            include 'views/producto.php';
            break;
        case 'contacto':
            include 'views/contact.php';
            break;
        case 'producto':
            include 'views/producto.php'; 
            break;
        case 'portfolio':
            include 'views/portfolio.php'; 
            break;
        case 'about-us':
            include 'views/about-us.php'; 
            break;
        default:
            include 'views/error.php';
            break;
    }
} else {
    include 'index.php';
}
?>