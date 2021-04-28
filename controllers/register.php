<?php
//include("../pages/register.php");

require_once("../config/config.php");

$sql = "INSERT INTO users (name, fname, rfid_id) VALUES ('John', 'Doe', '123456')";

$connection->exec($sql);
echo "New record created successfully";
?>
