<?php
require_once("config.php");

$data = $_POST;

if (empty($data['lastname']) ||
    empty($data['firstname']) ||
    empty($data['mat']) ||
    empty($data['cardId']) ||
    empty($data['residence']) ||
    empty($data['roomNum'])) {

  die('Veuillez remplir tous les champs!');
}

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$mat = $_POST['mat'];
$cardId = $_POST['cardId'];
$residence = $_POST['residence'];
$roomNum = $_POST['roomNum'];

$sql = "INSERT INTO users (lastname, firstname, mat, cardId, residence, roomNum) VALUES ('$lastname', '$firstname', '$mat', '$cardId', '$residence', '$roomNum')";

try {
  $connection->exec($sql);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

header ('refresh:5;url=../pages/register.php');