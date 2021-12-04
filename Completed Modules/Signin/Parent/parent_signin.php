<!DOCTYPE html>
<html>
<head>
<title>Students Data</title>
<link href="/style.css" rel="stylesheet" />
<body bgcolor="#82cced">
    <div class="header"><img src="/img/smo-logo.png"/><h1>&nbsp;St. Mary's Orphanage & Day School</h1><p>&nbsp;&nbsp;103, Dum Dum Road, Kolkata - 700030.</p></div>
		<br/>
		<hr/>
<center>
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

$sql = "SELECT * FROM STUDENT_REGISTRATION";
$result = $conn->query($sql);

$classroll = $_POST["classroll"];
$password = $_POST["passwd"];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

	if($row["classroll"]==$classroll and $row["password"]==$password)
	{
		echo "<h3>Your classroll id is: ".$classroll.'</h3><br>';
		echo "<h3>Your name is: ".$row["name"].'</h3><br>';
	}
	else
	{
		echo "<h3>Signin Unsuccessfull!!! Please Try again later.</h3>".'<br>';
	}
  }
}
?>
</center>
</body>
</head>
</html>