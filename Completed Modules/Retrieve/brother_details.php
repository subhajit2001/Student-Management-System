<!DOCTYPE html>
<html>
<head>
<title>Brother Data</title>
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

echo '<center><h1>Brother Details Table</h1></center>';
echo '<body bgcolor="#82cced">';
echo '<table id="table1" border=10>';
echo '<tr>';
echo '<th>Class-Roll</th>';
echo '<th>Name</th>';
echo '<th>Brother Name</th>';
echo '<th>Brother Class</th>';
echo '<th>Brother Section</th>';
echo '<tr>';

$sql = "SELECT * FROM BROTHER";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>'.$row["classroll"].'</td>';
    echo '<td>'.$row["name"].'</td>';
    echo '<td>'.$row["brother_name"].'</td>';
    echo '<td>'.$row["brother_class"].'</td>';
    echo '<td>'.$row["brother_sec"].'</td>';
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