<?php
$servername = "localhost";
$username = "miguel";
$password = "abc123.";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
print ("<H1>Connected successfully</H1>\n");
?>

