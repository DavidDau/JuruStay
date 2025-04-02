<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "places_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $place_id = $_POST["place_id"];
    $comment = $_POST["comment"];
    $stmt = $conn->prepare("INSERT INTO comments (place_id, comment) VALUES (?, ?)");
    $stmt->bind_param("is", $place_id, $comment);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
