<?php
$servername = "localhost";
$username = "your_mysql_username"; // Replace with your MySQL username
$password = "your_mysql_password"; // Replace with your MySQL password
$dbname = "hrm_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
