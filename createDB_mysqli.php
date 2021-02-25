<?php
$servername = "localhost";
$username = "miguel";
$password = "abc123.";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    print ("<p>No hay conexion</p>");
  die("Connection failed: " . mysqli_connect_error());
}
else{print ("<p>me conecto</p>");}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    print ("<p>Database created successfully</p>");
  echo "Database created successfully";
} else {
    print ("<p>Error creating database: " .mysqli_error($conn)."</p>");
  echo "Error creating database: " . mysqli_error($conn);
}  

mysqli_close($conn);
?>