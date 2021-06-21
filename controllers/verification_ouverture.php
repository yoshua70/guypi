<?php
$servername = "localhost";
$username = "michee";
$database = "guypi";
$password = "@Jesus4Life";

// Connexion à la base de données
try
{
	$bdd = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    
  }
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

?>