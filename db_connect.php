<?php
$servername = "localhost";
$username = "root";
$password = "Asjaquifa.bwu.110716092003"; // Your MySQL root password if set
$dbname = "influencer_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
