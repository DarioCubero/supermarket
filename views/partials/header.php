<?php
session_start();

require 'controllers/cartController.php';
?>


<!-- Header con Navbar de Bootstrap -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket</title>
    <!-- CDNS -->
    <!-- Vincular Bootstrap CSS desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- SWAL -->
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma/bulma.css" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- CUSTOM -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <style>
        /* Estilo personalizado para que el modal cubra toda la pantalla */
        .modal-fullscreen {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body clas="bg-dark">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php?pagina=inicio">Supermarket | Mi sitio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?pagina=producto">Productos <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=contacto">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=about-us">About Us</a>
                    </li>
                </ul>
                <!-- Botón de Login que abre la ventana modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authModal">
                    Login
                </button>
                &nbsp;
                <button class="btn btn-success bi bi-cart" data-bs-toggle="modal" data-bs-target="#cartModal">
                    Cart
                </button>
            </div>
        </nav>
    </header>

    <!-- Modal de Login -->
    <!-- <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./services/login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="correo@ejemplo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>
                    <div class="mt-3">
                        <a href="./services/register.php" class="btn btn-secondary">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Login / Register Modal-->
    <!-- Modal -->
    <div class="modal fade login-register-form" id="authModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:400px">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <ul class="nav nav-tabs" id="authTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active d-flex align-items-center" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-form" type="button" role="tab">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Login
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center" id="register-tab" data-bs-toggle="tab" data-bs-target="#registration-form" type="button" role="tab">
                                <i class="bi bi-person-plus me-1"></i> Register
                            </button>
                        </li>
                    </ul>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="tab-content mt-3" id="authTabContent">
                        <!-- Login Tab -->
                        <div id="login-form" class="tab-pane fade show active" role="tabpanel">
                            <form action="controllers/userController.php" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pwd" class="form-label">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>

                        <!-- Register Tab -->
                        <div id="registration-form" class="tab-pane fade" role="tabpanel">
                            <form action="controllers/userController.php" method="POST">
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Full Name:</label>
                                    <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" name="fullname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">User Name:</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter your user name" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter new email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" class="form-control" id="password" placeholder="New password" name="password" required>
                                </div>
                                <input type="hidden" name="action" value="register">
                                <button type="submit" class="btn btn-secondary" id="registerBtn" disabled>Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal del Carrito -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Carrito de Compras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Mostrar productos del carrito -->
                    <?php if (!empty($_SESSION['cart'])): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                                    <tr>
                                        <td><?= $item['idProducto'] ?></td>
                                        <td><?= $item['nombreProducto'] ?></td>
                                        <td><?= $item['precioProducto'] ?></td>
                                        <td><?= $item['cantidadProducto'] ?></td>
                                        <td>
                                            <form action="index.php" method="POST">
                                                <input type="hidden" name="product_index" value="<?= $index ?>">
                                                <button type="submit" name="remove_from_cart" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <p>El carrito está vacío.</p>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



<script>
 // Function to enable Register button when all fields are filled and valid
 const registerForm = document.querySelector('#registration-form');
  const registerButton = document.querySelector('#registerBtn');
  const requiredFields = registerForm.querySelectorAll('input[required]');

  requiredFields.forEach(field => {
    field.addEventListener('input', () => {
      // Check if all required fields are filled and valid
      const allValid = [...requiredFields].every(input => input.value && input.checkValidity());
      registerButton.disabled = !allValid;
    });
  });
</script>