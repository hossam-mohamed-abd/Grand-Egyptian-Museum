const loginForm = document.getElementById("loginForm");
const inputEmail = document.getElementById("inputEmail");
const inputPassword = document.getElementById("inputPassword");
const errorBox = document.getElementById("errorBox");

// =====================================
// Validation Functions
// =====================================
function validateEmail(email) {
  return /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(email);
}

function validatePassword(password) {
  if (password.length < 8) return "Password must be at least 8 characters.";
  if (!/[A-Z]/.test(password)) return "Must include uppercase letter.";
  if (!/[a-z]/.test(password)) return "Must include lowercase letter.";
  if (!/[0-9]/.test(password)) return "Must include number.";
  if (!/[@$!%*?&]/.test(password)) return "Must include special character.";
  return true;
}

function showError(msg) {
  errorBox.classList.remove("d-none");
  errorBox.innerText = msg;
}

// =====================================
// Handle Submit (LOGIN ONLY)
// =====================================
loginForm.onsubmit = function (e) {
  e.preventDefault();

  let email = inputEmail.value.trim();
  let password = inputPassword.value.trim();

  // Validation
  if (!validateEmail(email)) return showError("Invalid email format");
  const passCheck = validatePassword(password);
  if (passCheck !== true) return showError(passCheck);

  fetch("/GEM_mvc/public/auth/login", {
    method: "POST",
    body: new FormData(loginForm),
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.status === "success") {
        window.location.href = "/GEM_mvc/public/";
      } else {
        showError(data.message);
      }
    });
};
