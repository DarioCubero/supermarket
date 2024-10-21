<?php
require_once './config.php';

class UserController {
    // Registro de un nuevo usuario
    public function register($username, $email, $password) {
        global $pdo;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Encriptar la contraseña
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$username, $email, $hashedPassword]);
    }

    // Autenticación de usuario
    public function login($email, $password) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            // Aquí puedes iniciar sesión y guardar la información en la sesión
            return $user;
        }
        return null;
    }

    // Listar usuarios (opcional)
    public function getUsers() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
