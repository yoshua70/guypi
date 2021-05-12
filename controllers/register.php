<?php
require_once("../config/config.php");

if (!empty($_POST["nom"]) AND !empty($_POST["prenom"]) AND !empty($_POST["rfid_id"])) {

  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $rfid_id = $_POST["rfid_id"];

  $sql = "INSERT INTO users (name, fname, rfid_id) VALUES ('$nom', '$prenom', '$rfid_id')";

  $connection->exec($sql);
}
?>