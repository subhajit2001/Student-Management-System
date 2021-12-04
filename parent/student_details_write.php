<!DOCTYPE html>
<html>
<head>
	<title>Parent Signin</title>
	<link href="/style.css" rel="stylesheet"/>
</head>
<body bgcolor="#61d6e8">
	
		<div class="header"><img src="/img/smo-logo.png"/><h1>&nbsp;St. Mary's Orphanage & Day School</h1><p>&nbsp;&nbsp;103, Dum Dum Road, Kolkata - 700030.</p></div>
		<br/>
		<hr/>
		<center><h2 class="header1">Student DataBase Management System</h2></center>
		<center>
			<fieldset>
			 <legend><b>Student Acessibilities</b></legend>

<?php
//Student Variables
$classroll = $_POST["classroll"];
$name = $_POST["name"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$class = $_POST["class"];
$section = $_POST["sec"];
$second_language = $_POST["sl"];
$religion = $_POST["rel"];
$category = $_POST["spcat"];
$mode_trans = $_POST["mot"];
$homeadd = $_POST["homeadd"];
$homephone = $_POST["homephone"];
$studentphone = $_POST["studentphone"];

echo '<h3>This data is submitted. It will be verified by the Admin and finalised.</h3>'.'<br><br>';
echo '<center><h1>Hi '.$name.'. Welcome to this Portal!!!</h1></center>'.'<br>';
echo '<center><a href="/parent/form.html" class="button">Fill Up Student Details</a>
<a href="/admin/admin_signin.php" class="button">Generate Student Profile&nbsp</a></center';
echo '<center><a href="/index.php" class="button">Logout</a></center';

// To Append at Student CSV File
$list = array("$classroll,$name,$dob,$email,$class,$section,$second_language,$religion,$category,$mode_trans,$homeadd
,$homephone,$studentphone,Yes");
$file_append = fopen("student_details.csv","a");
foreach ($list as $line)
{
    fputcsv($file_append,explode(',',$line));   
}
fclose($file_append);

// To Append at Father CSV File
$faname = $_POST["faname"];
$faoccu = $_POST["faoccu"];
$faphone = $_POST["faphone"];
$faoffadd = $_POST["faoffadd"];
$faoffnum = $_POST["faoffnum"];

$list = array("$classroll,$name,$faname,$faoccu,$faphone,$faoffadd,$faoffnum");
$file_append = fopen("fathers_details.csv","a");
foreach ($list as $line)
{
    fputcsv($file_append,explode(',',$line));   
}
fclose($file_append);

//To Append at Mother CSV File
$moname = $_POST["moname"];
$mooccu = $_POST["mooccu"];
$mophone = $_POST["mophone"];
$mooffadd = $_POST["mooffadd"];
$mooffnum = $_POST["mooffnum"];

$list = array("$classroll,$name,$moname,$mooccu,$mophone,$mooffadd,$mooffnum");
$file_append = fopen("mothers_details.csv","a");
foreach ($list as $line)
{
    fputcsv($file_append,explode(',',$line));   
}
fclose($file_append);

$broname = $_POST["broname"];
//To Append at Brother's Details
if($broname!="")
{
$broclass = $_POST["broclass"];
$brosec = $_POST["brosec"];

$list = array("$classroll,$name,$broname,$broclass,$brosec");
$file_append = fopen("brothers_details.csv","a");
foreach ($list as $line)
{
    fputcsv($file_append,explode(',',$line));   
}
fclose($file_append);
}
?>
</center>
		<hr/>
</body>
</html>
