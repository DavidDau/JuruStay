<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "places_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch places
$sql = "SELECT * FROM places ORDER BY created_at DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posted Places</title>
    <link rel="stylesheet" href="display.css">
    <script src="display.js" defer></script>
    
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

    <!-- Navigation Bar ---->
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
      <div class="menu-toggle" onclick="toggleMenu()"><i class="fa-solid fa-bars" style="color: #ffffff"></i><div>
    </nav>

    <div class="header">
    <h2>Posted Places</h2>
    <button onclick ="window.location.href='logout.php'">Logout</button>    
    </div>
    <div class="places-container">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="place-card">
                <?php if (strpos($row["file_type"], "image") !== false) { ?>
                    <img src="<?php echo $row['file_path']; ?>" alt="<?php echo $row['name']; ?>">
                <?php } else { ?>
                    <video src="<?php echo $row['file_path']; ?>" controls></video>
                <?php } ?>
                
                <h3><?php echo $row['name']; ?></h3>
                <p><?php echo $row['description']; ?></p>
                <a href="<?php echo $row['location']; ?>" target="_blank">View on Google Maps</a>

                <!-- Star Rating -->
                <div class="rating" data-place-id="<?php echo $row['id']; ?>">
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <span class="star" data-value="<?php echo $i; ?>">&#9733;</span>
                    <?php } ?>
                </div>

                <!-- Comment Section -->
                <div class="comments">
                    <h4>Comments</h4>
                    <div class="comment-list" id="comments-<?php echo $row['id']; ?>">
                        <!-- Comments will load here via AJAX -->
                    </div>
                    <textarea id="comment-<?php echo $row['id']; ?>" placeholder="Leave a comment..."></textarea>
                    <button onclick="submitComment(<?php echo $row['id']; ?>)">Post</button>
                </div>
            </div>
        <?php } ?>
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
</body>
</html>

<?php $conn->close(); ?>
