<?php
$servername = "localhost";
$username = "michee";
$database = "guypi";
$password = "@Jesus4Life";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>