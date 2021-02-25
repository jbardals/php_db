<?php
$user = "miguel";
$password = "abc123.";
$database = "base_datos";
$table = "proba";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>TODO</h2><ol>";
  foreach($db->query("SELECT IDE_Proba,Nome,Apelidos FROM $table") as $row) {
      print ("<p>Imprimimos las entradas de la tabla. ".$table."</p>");
    print ("<li>" . $row['IDE_Proba'] . "</li>");
    print ("<li>" . $row['Nome'] . "</li>");
    print ("<li>" . $row['Apelidos'] . "</li>");
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}