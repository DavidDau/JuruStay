<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JuruStay-Navigate</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="navigate.css" />
    <link rel="icon" href="assets/images/Logo-white.png" />
    <script defer src="navigate.js"></script>
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

   <!-- Hero Section -->
    <header class="hero">
      <h1>Explore Stunning Properties</h1>
      <p>Find the best stays and experiences around the world.</p>
      <input type="text" id="searchBox" placeholder="Search by name or location...">
    </header>

<!-- Filter Buttons -->
<div class="filter-container">
    <button class="filter-btn" data-filter="all">All</button>
    <button class="filter-btn" data-filter="hotel">Hotels</button>
    <button class="filter-btn" data-filter="apartment">Apartments</button>
    <button class="filter-btn" data-filter="park">Parks</button>
    <button class="filter-btn" data-filter="real-estate">Real Estate</button>
</div>

<!-- Image Gallery -->
<section id="gallery" class="gallery">
    <div class="image-card hotel" data-location="Kigali">
        <img src="assets/images/locations/Radisson Blu.jpg" alt="Radisson Blu">
        <div class="caption">Radisson Blu Hotel - Kigali</div>
    </div>
    <div class="image-card hotel" data-location="Kigali">
        <img src="assets/images/locations/M Hotel.jpg" alt="M Hotel">
        <div class="caption">M Hotel - Kigali</div>
    </div>
    <div class="image-card apartment" data-location="Kigali">
        <img src="assets/images/locations/Elizabeth Golf Apartment.jpg" alt="Elizabeth Golf Apartment">
        <div class="caption">Elizabeth Golf Apartment - Kigali</div>
    </div>
    </div>
    <div class="image-card park" data-location="Nyungwe">
        <img src="assets/images/locations/Nyungwe Park.png" alt="Beautiful Park in Nyungwe">
        <div class="caption">Beautiful Park - Nyungwe</div>
    </div>
    <div class="image-card park" data-location="Kigali">
        <img src="assets/images/locations/Nyandungu park.jpg" alt="Beautiful Park">
        <div class="caption">Beautiful Park - Nyandungu</div>
    </div>
    <div class="image-card real-estate" data-location="Kigali">
        <img src="assets/images/locations/Real Estate.jpg" alt="Luxury Villa in Kigali" title="Click for more info">
        <div class="caption">Luxury Villa - Kigali</div>
    </div>
</section>

<!-- Lightbox for Viewing Images -->
<div id="lightbox" class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightboxImg">
    <div id="lightboxCaption"></div>
</div>

<!-- Footer -->
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
