
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $usuarios = [
        "a@gmail.com" => "123",
        "b@gmail.com" => "456",
        "c@gmail.com" => "789",
    ];
    $valido = false;
    foreach ($usuarios as $k => $v) {
        if ($email == $k && $password == $v) {
            $valido = true;
            break;
        }
    }

    if ($valido) {
        echo "Login exitoso. ¡Bienvenido, $email!";
    } else {
        echo "Error: Correo o contraseña incorrectos.";
    }

    // echo $valido ? "OK" : "No valido";
} else {
    echo "Método de solicitud no permitido.";
} //endlogin

?>
