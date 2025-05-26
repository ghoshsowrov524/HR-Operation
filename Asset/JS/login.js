// Login Validation with redirect
function validateLoginForm() {
  const emailElement = document.getElementById('loginEmail');
  const passwordElement = document.getElementById('loginPassword');

  if (!emailElement || !passwordElement) {
    alert("Email or password input not found.");
    return false;
  }

  const email = emailElement.value.trim();
  const password = passwordElement.value.trim();

  if (!email || !password) {
    alert("Please fill in all fields.");
    return false;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters.");
    return false;
  }

  if (email === "abc@gmail.com" && password === "111111") {
    window.location.href = "../../View/Dashboard/dashboard.html";
  } else {
    alert("Invalid email or password.");
  }

  return false;
}

// Sign Up Validation
function validateSignupForm() {
  const passwordElement = document.getElementById('signupPassword');
  const confirmElement = document.getElementById('confirmPassword');

  if (!passwordElement || !confirmElement) {
    alert("Password or confirmation field not found.");
    return false;
  }

  const password = passwordElement.value.trim();
  const confirm = confirmElement.value.trim();

  if (password !== confirm) {
    alert("Passwords do not match!");
    return false;
  } else if (password.length < 6) {
    alert("Password must be at least 6 characters.");
    return false;
  }

  alert("Account created successfully!");
  return false;
}

// Forgot Password Validation
function validateForgotForm() {
  const emailElement = document.getElementById('forgotEmail');

  if (!emailElement) {
    alert("Email field not found.");
    return false;
  }

  const email = emailElement.value.trim();

  if (email === "") {
    alert("Please enter your email address.");
    return false;
  }

  if (!email.includes("@") || !email.includes(".") || email.indexOf("@") > email.lastIndexOf(".")) {
    alert("Please enter a valid email address.");
    return false;
  }

  alert("A password reset link has been sent to your email.");
  return false;
}

// Event listeners
document.addEventListener('DOMContentLoaded', function () {
  const loginForm = document.getElementById('loginForm');
  const signupForm = document.getElementById('signupForm');
  const forgotForm = document.getElementById('forgotForm');

  if (loginForm) loginForm.onsubmit = validateLoginForm;
  if (signupForm) signupForm.onsubmit = validateSignupForm;
  if (forgotForm) forgotForm.onsubmit = validateForgotForm;
});
