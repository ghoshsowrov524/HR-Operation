function showForm(formId) {
  document.querySelectorAll('.form').forEach(form => form.classList.remove('active'));
  document.getElementById(formId).classList.add('active');
}

// Simple email validation without regex
function isValidEmail(email) {
  return email.includes('@') && email.includes('.') && email.indexOf('@') < email.lastIndexOf('.');
}

function handleLogin() {
  const email = document.getElementById('loginEmail').value.trim();
  const password = document.getElementById('loginPassword').value.trim();

  if (!email || !password) {
    alert("Please enter both email and password.");
    return;
  }

  if (!isValidEmail(email)) {
    alert("Invalid email format.");
    return;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters.");
    return;
  }

  // Simulate login success
  window.location.href = "dashboard.html";
}

function handleSignup() {
  const name = document.getElementById('signupName').value.trim();
  const email = document.getElementById('signupEmail').value.trim();
  const password = document.getElementById('signupPassword').value.trim();

  if (!name || !email || !password) {
    alert("Please fill in all fields.");
    return;
  }

  if (!isValidEmail(email)) {
    alert("Invalid email format.");
    return;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters.");
    return;
  }

  alert("Signup successful! Please login.");
  showForm('login');
}
