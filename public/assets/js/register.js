const form = document.getElementById("registerForm");
const regName = document.getElementById("regName");
const regEmail = document.getElementById("regEmail");
const regPassword = document.getElementById("regPassword");
const regErrorBox = document.getElementById("regErrorBox");

// ======================
// VALIDATIONS
// ======================
function validateEmail(email) {
    return /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(email);
}

function validatePassword(password) {
    if (password.length < 8) return "Password must be at least 8 characters";
    if (!/[A-Z]/.test(password)) return "Must contain uppercase letter";
    if (!/[a-z]/.test(password)) return "Must contain lowercase letter";
    if (!/[0-9]/.test(password)) return "Must contain number";
    if (!/[@$!%*?&]/.test(password)) return "Must contain special character";
    return true;
}

function showRegError(msg) {
    regErrorBox.classList.remove("d-none");
    regErrorBox.innerText = msg;
}

// ======================
// HANDLE SUBMIT
// ======================
form.onsubmit = function (e) {
    e.preventDefault();

    let name = regName.value.trim();
    let email = regEmail.value.trim();
    let password = regPassword.value.trim();

    if (name.length < 3) return showRegError("Name must be at least 3 characters");

    if (!validateEmail(email)) return showRegError("Invalid email format");

    let passwordCheck = validatePassword(password);
    if (passwordCheck !== true) return showRegError(passwordCheck);

    fetch("/GEM_mvc/public/auth/signup", {
        method: "POST",
        body: new FormData(form),
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === "success") {
            window.location.href = "/GEM_mvc/public/login";
        } else {
            showRegError(data.message);
        }
    });
};
