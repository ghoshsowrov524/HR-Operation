<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['forgotEmail'])) {
        $email = trim($_POST['forgotEmail']);

        if (empty($email)) {
            echo "Email is required.";
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit;
        }

        echo "A reset link sent.";
        exit;

    } else {
        echo "Email field is missing.";
        exit;
    }

} else {
    echo "Invalid request method.";
    exit;
}
?>
