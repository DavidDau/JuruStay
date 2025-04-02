<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "places_db";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $place_id = $_POST["place_id"];
    $username = $_POST["username"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO reviews (place_id, username, rating, comment) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isis", $place_id, $username, $rating, $comment);
    if ($stmt->execute()) {
        echo "<script>alert('Review submitted!'); window.location.href='posted_places.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
