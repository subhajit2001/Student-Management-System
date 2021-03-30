<?php
$servername = "127.0.0.1";
$username = "subhajit";
$password = "Krishna@1802";
$database = "student";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
echo "Connected successfully";
?>