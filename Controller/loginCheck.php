<?php
session_start();
 
if (isset($_REQUEST['submit'])) {
    $email = trim($_REQUEST['email']);
    $password = trim($_REQUEST['password']);
 
    if ($email == "" || $password == "") {
        echo "Null email/password!";
    } 
    else if ($email == "abc@gmail.com" && $password == "111111") {
        $_SESSION['status'] = true;
        $_SESSION['email'] = $email;
        header("Location: ../View/Dashboard/dashboard.php");
    } else {
        echo "invalid user!";
    }
} else {
    header('location: ../View/User Authentication/Login.php');
}
?>