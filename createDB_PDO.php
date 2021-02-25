<?php
$servername = "localhost";
$username = "miguel";
$password = "abc123.";
$database= "prueba3";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE ".$database;
  // use exec() because no results are returned
  $conn->exec($sql);
  print ("<H1>Database ".$database." created successfully</H1>\n");
} catch(PDOException $e) {
    print ("<H1>sql: ".$sql."mensaje: ".$e->getMessage()."</H1>\n");
}

$conn = null;
?>