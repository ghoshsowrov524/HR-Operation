<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>
  <link rel="stylesheet" href="../../Asset/CSS/Login.css">
</head>
<body>
  <div class="form-container">
    <h2>Sign Up</h2>
<form id="signupForm" method="POST" action="../../Controller/signup_validation.php">
  <input type="text" placeholder="Full Name" id="fullName" name="fullName" required />
  <input type="email" placeholder="Email" id="signupEmail" name="email" required />
  <input type="password" placeholder="Password" id="signupPassword" name="password" required />
  <input type="password" placeholder="Confirm Password" id="confirmPassword" name="confirmPassword" required />
  <button type="submit">Sign Up</button>
  <p>Already have an account? <a href="Login.php">Login</a></p>
</form>

  </div>
<script src="../../Asset/JS/Login.js"></script>

</body>
</html>
