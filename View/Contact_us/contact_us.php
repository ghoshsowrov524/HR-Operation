 <?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: ../User Authentication/Login.php');
    exit;
} 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="../../Asset/CSS/contact_us.css">
</head>
<body>

<header>
    <h1>Contact HR</h1>
</header>

<div class="contact-form">
    <form id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" required>

        <label for="message">Message:</label>
        <textarea id="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
        <p id="formMessage"></p>
    </form>
</div>

<script src="../../Asset/JS/contact_us.js"></script>
</body>
</html>
