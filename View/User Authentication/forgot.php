<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Forgot Password</title>
  <link rel="stylesheet" href="../../Asset/CSS/Login.css">
</head>
<body>
  <div class="form-container">
    <h2>Forgot Password</h2>
<form id="forgotForm" method="POST" action="../../Controller/forgot_password_validation.php">
  <input type="email" placeholder="Enter your email" name="forgotEmail" required />
  <button type="submit">Reset Password</button>
  <p><a href="Login.php">Back to Login</a></p>
</form>

  </div>
<script src="../../Asset/JS/Login.js"></script>

</body>
</html>
