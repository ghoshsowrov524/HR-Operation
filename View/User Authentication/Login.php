<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="../../Asset/CSS/Login.css">
</head>
<body>
  <div class="form-container">
    <h2>Login</h2>
    <form method="post" action="../../Controller/loginCheck.php">
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit" name="submit">Login</button>
      <p><a href="forgot.php">Forgot Password?</a></p>
      <p>Don't have an account? <a href="Signup.php">Sign up</a></p>
    </form>
  </div>
  <script src="../../Asset/JS/Login.js"></script>

</body>
</html>
