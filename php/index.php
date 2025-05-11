<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $hobby = $_POST["hobby"];

    $stmt = $conn->prepare("INSERT INTO users (name, email, hobby) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hobby);

    if ($stmt->execute()) {
        echo "User added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
