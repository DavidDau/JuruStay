// Function to toggle mobile menu
function toggleMenu() {
  let menu = document.querySelector(".nav-links");
  menu.classList.toggle("show");
}

// Initialize Email.js
(function sendMail() {
  let parms = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    subject: document.getElementById("subject").value,
    message: document.getElementById("message").value,
  };
  emailjs
    .send("service_i2ew00d", "template_hfklikh", parms)
    .then(alert("Message sent successfully!"));
});
