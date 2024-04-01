<?php
$servername = "localhost"; // Change this to your database server name if it's different
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "WEBP3"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error > 0) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected successfully"; // Optional message to confirm successful connection
}
?>