<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="contactus.css" />
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function(){
      emailjs.init({
        publicKey: "gyN4_zaCK0RWG5HjX",
        });
        })();
    </script>
    <script src="contactus.js"></script>
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
        <div class="menu-toggle" onclick="toggleMenu()"><i class="fa-solid fa-bars" style="color: #ffffff;"></i><div></nav>
            
        <!-- Feedback form -->
    <div class="form-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="form">
            <h2>Get in touch</h2>
            <input type="hidden" name="access_key" value="08310cff-81a1-4bc2-8c38-58f294561110">
            <input type="text" name="name" placeholder="Name" class="form-input" required>
            <input type="email" name="email" placeholder="Your Email" class="form-input" required>
            <input type="message" name="message" placeholder="Your message" class="form-input1" required>
            <button type="submit" class="form-btn">Submit  <i class="fa-solid fa-paper-plane"></i> </button>
        </action=>
    </div>

    <!-- footer -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-logo">
          <img src="assets/images/Logo-white.png" alt="JuruStay" width="35px" />
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
            <li>
              <a href="https://en-gb.facebook.com/login.php/?/" target="_blank"
                ><i class="fa-brands fa-facebook fa-2xl"></i
              ></a>
            </li>
            <li>
              <a href="https://x.com/i/flow/login" target="_blank"
                ><i class="fa-brands fa-square-x-twitter fa-2xl"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.instagram.com/accounts/login/?hl=en"
                target="_blank"
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
