<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JuruStay-About us</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="about.css" />
    <link rel="icon" href="assets/images/Logo-white.png" />
    <script defer src="about.js"></script>
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
        <div class="menu-toggle" onclick="toggleMenu()"><i class="fa-solid fa-bars" style="color: #ffffff"></i><div></nav>

    <section class="hero">
        <div class="hero-content">
            <h2>Who We Are</h2>
            <p>We are a team of passionate explorers committed to improving travel navigation and helping tourists discover new places effortlessly.</p>
        </div>
    </section>

    <section class="mission">
        <h2>Our Mission</h2>
        <p>Our mission is to connect travelers with exciting locations across the globe by providing a platform that simplifies navigation and discovery through real-time posts and recommendations.</p>
    </section>

    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="assets/images/Ceo.png" alt="Team Member 1" loading="lazy">
                <h3>John Doe</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="assets/images/Market lead.png" alt="Team Member 2" loading="lazy">
                <h3>Jane Smith</h3>
                <p>Marketing Lead</p>
            </div>
            <div class="team-member">
                <img src="assets/images/Tech.jpg" alt="Team Member 3" loading="lazy">
                <h3>Mike Johnson</h3>
                <p>Tech Lead</p>
            </div>
        </div>
    </section>
    <!-- footer -->
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
</body>
</html>
