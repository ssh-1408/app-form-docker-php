<?php
$servername = "db";
$username = "user";
$password = "userpass";
$database = "userapp";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
