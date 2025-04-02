<?php

session_start();

$errors = [
    'login' => $SESSION['login_error'] ?? '',
    'register' => $SESSION['register_error'] ?? ''
];

$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- Video Background -->
    <div class="video-container">
        <video autoplay loop muted>
            <source src="assets/images/HomeVid.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
      <div class="logo">
        <a class="logo-link" href="home.php">
          <img src="assets/images/Logo-white.png" alt="Logo" width="35px" title="Zion TCC Kabuga Parish"/>
          <div class="logo-text">Juru<i>Stay</i></div>
        </a> 
      </div>
      <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="navigate.php">Navigate</a></li>
      </ul>
      <li><a href="index.php" class="action_btn">Join</a></li>
      <div class="menu-toggle" onclick="toggleMenu()"><i class="fa-solid fa-bars" style="color: #ffffff"></i><div></nav>

    <h1>Welcome to JuruStay</h1>

    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
            <form action="login_register.php" method="post">
                <h2>Login</h2>
                <?= showError($errors['login']); ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
            </form>
        </div>
        
        <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
            <form action="login_register.php" method="post">
                <h2>Register</h2>
                <?= showError($errors['register']); ?>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <select name="role">
                    <option value="">--Select Role--</option>
                    <option value="user">Traveler</option>
                    <option value="admin">Agent</option>
                </select>
                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
            </form>
        </div>
        <!-- Footer -->
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="assets/images/Logo-white.png" alt="JuruStay" width="35px">
                <h3>JuruStay</h3>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                    <li><a href="navigate.php">Navigate</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <ul>
                    <li><a href="https://en-gb.facebook.com/login.php/?/" target="_blank"><i class="fa-brands fa-facebook fa-2xl" ></i></a></li>
                    <li><a href="https://x.com/i/flow/login" target="_blank"><i class="fa-brands fa-square-x-twitter fa-2xl"></i></a></li>
                    <li><a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a></li>
                </ul>
            </div>
        </div>
        </footer>
    <script src="script.js"></script>
</body>
</html>