<?php
$servername = "localhost";
$username = "miguel";
$password = "abc123.";

try {
  $conn = new PDO("mysql:host=$servername;dbname=base_datos", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  print ("<H1>Connected successfully</H1>\n");
} catch(PDOException $e) {
  print ("<H1>Connection failed: ".$e->getMessage()."/H1>\n");
}
?>