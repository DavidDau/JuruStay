<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "places_db";

$conn = new mysqli($servername, $username, $password, $database);

$place_id = $_GET["place_id"];
$result = $conn->query("SELECT * FROM comments WHERE place_id = $place_id ORDER BY created_at DESC");

while ($row = $result->fetch_assoc()) {
    echo "<p><strong>User:</strong> " . htmlspecialchars($row["comment"]) . "</p>";
}

$conn->close();
?>
