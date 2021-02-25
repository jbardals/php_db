<?php
$servername = "localhost";
$username = "miguel";
$password = "abc123.";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  print ("<H1>connection failed</H1>\n");
  die("Connection failed: " . mysqli_connect_error());
}
else{print ("<H1>Connected successfully</H1>\n");}
?>