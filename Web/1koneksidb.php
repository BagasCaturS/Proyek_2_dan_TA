<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$db         = "analisis_the_baru";

// Create connection
$conn       = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("<H1>Connection failed: " . mysqli_connect_error(). "</H1>");
}

?>