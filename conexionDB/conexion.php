<?php

$servername = "localhost";
$username = "root";
$password = "";
$baseDatos="BD_Academica_v_1";

// Create connection
$conn = new mysqli($servername, $username, $password,$baseDatos);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>