<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP MySQL password is empty
$dbname = "masterphp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h1>Connected successfully to masterphp_db!</h1>";
?>
