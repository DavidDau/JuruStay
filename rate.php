<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "places_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $place_id = $_POST["place_id"];
    $rating = $_POST["rating"];
    $stmt = $conn->prepare("INSERT INTO ratings (place_id, rating) VALUES (?, ?)");
    $stmt->bind_param("ii", $place_id, $rating);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
