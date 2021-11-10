<?php
$host="localhost";
$username = "TA2021006_user";
$password = "Kukk4Ruukku-1";
$db = "TA2021006_DB";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>