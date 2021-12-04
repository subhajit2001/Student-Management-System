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

$classroll = $_POST["classroll"];
$name1 = $_POST["name1"];
$password = $_POST["passwd"];


$sql = "INSERT INTO STUDENT_REGISTRATION (classroll,name,password) values('$classroll','$name1','$password')";

if($conn->query($sql)===TRUE)
{
  echo "Student Registered Successfully".'<br>';
}
else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
