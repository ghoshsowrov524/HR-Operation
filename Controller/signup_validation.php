<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (
        isset($_POST['fullName']) &&
        isset($_POST['email']) &&
        isset($_POST['password']) &&
        isset($_POST['confirmPassword'])
    ) {
        $fullName = trim($_POST['fullName']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirmPassword']);

        if (empty($fullName)) {
            echo "Full name is required.";
            exit;
        } elseif (strlen($fullName) < 3) {
            echo "Full name must be at least 3 characters.";
            exit;
        }

        if (empty($email)) {
            echo "Email is required.";
            exit;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit;
        }

        if (empty($password)) {
            echo "Password is required.";
            exit;
        } elseif (strlen($password) < 6) {
            echo "Password must be at least 6 characters.";
            exit;
        }

        if ($password !== $confirmPassword) {
            echo "Passwords do not match.";
            exit;
        }

        echo "Signup successful. You can now log in.";
        exit;

    } else {
        echo "All fields are required.";
        exit;
    }

} else {
    echo "Invalid request method.";
    exit;
}
?>
