<?php
$servername = "localhost"; // XAMPP default
$username = "root"; // Default user in XAMPP
$password = ""; // No password by default
$database = "places_db"; // Use the created database

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $location = $_POST["location"];
    $description = $_POST["description"];
    
    // File Handling
    $file = $_FILES["file"];
    $fileName = basename($file["name"]);
    $fileType = $file["type"];
    $targetDir = "uploads/";
    $targetFilePath = $targetDir . time() . "_" . $fileName;

    // Check and move the uploaded file
    if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
        // Insert into database
        $stmt = $conn->prepare("INSERT INTO places (name, description, location, file_path, file_type) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $description, $location, $targetFilePath, $fileType);

        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Place uploaded successfully!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Database error: " . $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(["success" => false, "message" => "File upload failed!"]);
    }
}

$conn->close();
?>
