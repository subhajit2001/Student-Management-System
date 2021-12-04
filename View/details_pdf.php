<!DOCTYPE html>
<html>
<head>
<title>Students Data</title>
<link href="/style.css" rel="stylesheet" />
<body bgcolor="#82cced">
    <div class="header"><img src="/img/smo-logo.png"/><h1>&nbsp;St. Mary's Orphanage & Day School</h1><p>&nbsp;&nbsp;103, Dum Dum Road, Kolkata - 700030.</p></div>
		<br/>
		<hr/>
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

$sql = "SELECT * FROM STUDENT";
$result = $conn->query($sql);

echo '<h3>Student Details</h3><br>';
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["classroll"]==$classroll)
    {
        echo '<h4><u>Classroll:</u> '.$row["classroll"].'</h4>';
        echo '<h4><u>Name:</u> '.$row["name"].'</h4>';
        echo '<h4><u>Date of Birth:</u> '.$row["dob"].'</h4>';
        echo '<h4><u>Email:</u> '.$row["email"].'</h4>';
        echo '<h4><u>Class:</u> '.$row["class"].'</h4>';
        echo '<h4><u>Section:</u> '.$row["section"].'</h4>';
        echo '<h4><u>Second Language:</u> '.$row["sec_lang"].'</h4>';
        echo '<h4><u>Religion:</u> '.$row["religion"].'</h4>';
        echo '<h4><u>Category:</u> '.$row["category"].'</h4>';
        echo '<h4><u>Mode of Transport:</u> '.$row["mode_of_transport"].'</h4>';
        echo '<h4><u>Home Address:</u> '.$row["home_address"].'</h4>';
        echo '<h4><u>Home Phone Number:</u> '.$row["homephone"].'</h4>';
        echo '<h4><u>Student Phone Number:</u> '.$row["student_phone"].'</h4>';
    
    }
  }
}
?>
</body>
</html>