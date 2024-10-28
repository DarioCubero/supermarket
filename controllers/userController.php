<?php
require_once __DIR__ . '/../config.php';

// require_once './models/loginModel.php';
// $loginModel = new Login();



if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['action']) && $_POST['action'] === 'register') {
        foreach ($_POST as $key => $value) {
            echo "<p>$key: $value</p>";
        }
        
        // Registration form data
        // $fullname = htmlspecialchars(trim($_POST['fullname']));
        // $username = htmlspecialchars(trim($_POST['username']));
        // $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
        // $password = trim($_POST['password']);
        
        // Validation checks
        // $errors = [];
        // if (!$fullname) $errors[] = "Full name is required.";
        // if (!$username) $errors[] = "Username is required.";
        // if (!$email) $errors[] = "Valid email is required.";
        // if (strlen($password) < 6) $errors[] = "Password must be at least 6 characters.";

        // Process registration if no errors
        // if (empty($errors)) {
            global $pdo;
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Encriptar la contraseña
            $stmt = $pdo->prepare("INSERT INTO users (fullname, username, email, password) VALUES (?, ?, ?, ?)");
            $registerStatus=  $stmt->execute([$fullname, $username, $email, $hashedPassword]);
            // if ($registerStatus) {
            //     echo "Registration successful!";
            // } else {
            //     echo "Registration failed.";
            // }
        // } else {
        //     foreach ($errors as $error) echo "<p>$error</p>";
        // }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'login') {
        // Login form data
        $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
        $password = trim($_POST['password']);

        if ($email && $password) {

            $user = $loginModel->login($email, $password);


            if ($user) {
                // User authenticated
                echo "Login successful!";
                // Store user info in session or perform other login actions
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Please fill in all fields.";
        }
    }
}

?>
