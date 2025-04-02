<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agents</title>
    <link rel="stylesheet" href="admin_page.css">
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

    <!-- Add a location -->
    <h2>Upload a New Place</h2>

    <form id="uploadForm">
        <input type="file" id="file" name="file" accept="image/*, video/*" required>
        <input type="text" id="placeName" name="name" placeholder="Enter place name" required>
        <input type="text" id="googleLocation" name="location" placeholder="Google Maps link" required>
        <textarea id="placeDescription" name="description" placeholder="Write a short description" required></textarea>
        <button type="submit">Upload</button>
    </form>

    <button><a href="display.php"><b>Visit your places</b></a></button>

    <div id="responseMessage"></div>

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
<script src="admin_page.js"></script>
</body>
</html>