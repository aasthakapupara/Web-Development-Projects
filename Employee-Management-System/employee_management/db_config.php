<?php
$servername = "localhost";
$username = "root"; // Change this according to your MySQL configuration
$password = ""; // Add your password if you have one
$dbname = "employee_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
