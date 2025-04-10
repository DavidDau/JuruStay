<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JuruStay</title>
    <title>ZTCC Kabuga</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="home.css" />
    <link rel="icon" href="assets/images/Logo-white.png" />
    <script defer src="home.js"></script>
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

    <!-- Main Content -->
    <div class="content">
      <h1>Welcome to JuruStay</h1>
      <p>
        Discover a world of endless possibilities with our newly enhanced
        website, designed to make your journey seamless and inspiring. We’ve
        simplified your navigation, so you can effortlessly explore over 1,000
        stunning new destinations posted from every corner of the globe. Dive
        into this immersive experience and uncover your next dream getaway—your
        personal paradise awaits. Start your adventure today and find the
        perfect place to stay, tailored just for you!.
      </p>
      <button class="btn"><a href="index.php"><b>Get Started</b></a></button>
    </div>
    <div class="content1">
      <div class="team">
        <h1>Who We Are</h1>
        <p>
          Our team is dedicated to solving the challenge of poor navigation for tourists and the difficulty of discovering new places. Many travelers struggle to find reliable information about destinations, leading to missed opportunities and frustrating experiences. Our platform provides a seamless solution by offering curated posts, real-time updates, and interactive guides from explorers worldwide. By showcasing hidden gems, must-visit attractions, and local insights, we empower travelers to navigate unfamiliar locations with ease. Whether you're looking for adventure, culture, or relaxation, our platform connects you to the best experiences across the globe, making exploration effortless and exciting.
        </p>
      </div>
      <img src="assets/images/team.jpg" alt="Who We Are"/>
    </div>
    <footer class="footer">
      <div class="footer-container">
          <div class="footer-logo">
              <img src="assets/images/Logo-white.png" alt="JuruStay" width="35px">
              <h3>JuruStay</h3>
          </div>
          <div class="footer-links">
              <ul>
                  <li><a href="about.php">About us</a></li>
                  <li><a href="contactus.php">Feedback</a></li>
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
