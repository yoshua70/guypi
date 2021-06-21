<?php
$servername = "localhost";
$username = "michee";
$database = "guypi";
$password = "@Jesus4Life";
$api_key_value = "guypi";

// Connexion à la base de données
try
{
	$bdd = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  die('Erreur : '.$e->getMessage());
}

$json_url = "http://192.168.43.3/ouverture.php";
$json = file_get_contents('php://input');

$data = json_decode($json, true);

$residence = $data["residence"];
$numChambre = $data["numChambre"];
$idUtilisateur = $data["idUtilisateur"];

try {
  $sql = "SELECT * FROM users WHERE cardId = '$idUtilisateur' AND residence = '$residence' AND roomNum = $numChambre";
  $res = $bdd->query($sql);

  if($res->rowCount() > 0) {
    echo("True");
  } else {
    echo("False");
  }
}
catch(PDOException $e) {
  die("ERROR: Could not able to execute $sql. ".$e->getMessage());
}

unset($bdd);
?>
