// Function to toggle mobile menu
function toggleMenu() {
    let menu = document.querySelector(".nav-links");
    menu.classList.toggle("show");
  }

function showForm(formId) {
    document.querySelectorAll('.form-box').forEach(form => form.classList.remove('active'));
    document.getElementById(formId).classList.add('active');
}