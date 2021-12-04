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

echo '<center><h1>Student Details Table</h1></center>';
echo '<body bgcolor="#82cced">';
echo '<table id="table1" border=10>';
echo '<tr>';
echo '<th>Class-Roll</th>';
echo '<th>Name</th>';
echo '<th>Date of Birth</th>';
echo '<th>Email Id</th>';
echo '<th>Class</th>';
echo '<th>Section</th>';
echo '<th>Second Language</th>';
echo '<th>Religion</th>';
echo '<th>Category</th>';
echo '<th>Mode of Transport</th>';
echo '<th>Home Address</th>';
echo '<th>Home Phone Number</th>';
echo '<th>Student Phone number</th>';
echo '<tr>';



$sql = "SELECT * FROM STUDENT";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row["classroll"].'</td>';
    echo '<td>'.$row["name"].'</td>';
    echo '<td>'.$row["dob"].'</td>';
    echo '<td>'.$row["email"].'</td>';
    echo '<td>'.$row["class"].'</td>';
    echo '<td>'.$row["section"].'</td>';
    echo '<td>'.$row["sec_lang"].'</td>';
    echo '<td>'.$row["religion"].'</td>';
    echo '<td>'.$row["category"].'</td>';
    echo '<td>'.$row["mode_of_transport"].'</td>';
    echo '<td>'.$row["home_address"].'</td>';
    echo '<td>'.$row["homephone"].'</td>';
    echo '<td>'.$row["student_phone"].'</td>';
    echo '</tr>';
        }
        echo '</table>';
    }
else{
    echo "0 results";
}

echo '<br><hr>';

$conn->close();
?>
</center>
</body>
</head>
</html>