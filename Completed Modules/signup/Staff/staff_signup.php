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

$empid = $_POST["empid"];
$name = $_POST["name"];
$password = $_POST["passwd"];


$sql = "INSERT INTO STAFF_REGISTRATION (empid,name,password) values('$empid','$name','$password')";

if($conn->query($sql)===TRUE)
{
  echo "Staff Registered Successfully".'<br>';
}
else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
