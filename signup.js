// Function to toggle mobile menu
function toggleMenu() {
  let menu = document.querySelector(".nav-links");
  menu.classList.toggle("show");
}

// Function to toggle between Sign In and Sign Up forms
function toggleForm() {
  let loginForm = document.getElementById("login-form");
  let signupForm = document.getElementById("signup-form");
  let formTitle = document.getElementById("form-title");
  let toggleText = document.getElementById("toggle-form");

  if (loginForm.style.display === "none") {
    loginForm.style.display = "block";
    signupForm.style.display = "none";
    formTitle.textContent = "Sign In";
    toggleText.innerHTML =
      "Don't have an account? <span onclick='toggleForm()'>Sign Up</span>";
  } else {
    loginForm.style.display = "none";
    signupForm.style.display = "block";
    formTitle.textContent = "Sign Up";
    toggleText.innerHTML =
      "Already have an account? <span onclick='toggleForm()'>Sign In</span>";
  }
}

// Handling form submissions
document
  .getElementById("login-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert("Sign In Successful!");
  });

document
  .getElementById("signup-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert("Sign Up Successful!");
  });
