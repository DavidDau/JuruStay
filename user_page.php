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
    <link rel="stylesheet" href="user_page.css">
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
    
    <!--Posted Places<-->
    <h2>Posted Places</h2>
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

                <!-- Review Form -->
                <div class="review-section">
                    <h4>Leave a Review</h4>
                    <form action="submit_review.php" method="POST">
                        <input type="hidden" name="place_id" value="<?php echo $row['id']; ?>">
                        <input type="text" name="username" placeholder="Your Name" required>
                        
                        <!-- Star Rating -->
                        <div class="rating" data-place-id="<?php echo $row['id']; ?>">
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <span class="star" data-value="<?php echo $i; ?>">&#9733;</span>
                            <?php } ?>
                        </div>
                    
                        <textarea name="comment" placeholder="Write a comment..." required></textarea>
                        <button type="submit">Post Review</button>
                    </form>
                </div>

                <!-- Display Reviews -->
                <div class="reviews">
                    <h4>Reviews</h4>
                    <?php
                    $place_id = $row['id'];
                    $review_sql = "SELECT * FROM reviews WHERE place_id = $place_id ORDER BY created_at DESC";
                    $review_result = $conn->query($review_sql);
                    while ($review = $review_result->fetch_assoc()) {
                        echo "<p><strong>{$review['username']}</strong> - {$review['rating']} Stars</p>";
                        echo "<p>{$review['comment']}</p><hr>";
                    }
                    ?>
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
