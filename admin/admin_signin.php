<?php
//Database name
$database_name = "sqlite:declaration.sqlite";

//Database connection
$db = new SQLite3($database_name);
$message = "";

if( isset($_POST["submit_data"]))
{
	//Get data from POST submission
	$username = $_POST['username'];
	$pass = $_POST['pass'];

	//Make Query with post data
	$query1 = "SELECT (username,pass) FROM Users WHERE (username=$username, pass=$pass)";

	if(($db->exec($query))&&($username="admin")&&($pass="admin@12"))
	{
		header("Location: /admin.php");
	}
	//Execute the query
	//If data is inserted properly then set success message otherwise set error message
	if($db->exec($query))
	{	
		$message = "Successfully Logged In";
		header("Location: /insert.php");
	}
	else
	{
		$message = "Login Details not correct...";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Signin</title>
	<link href="/style.css" rel="stylesheet"/>
</head>
<body bgcolor="#61d6e8">
	
		<div class="header"><img src="/img/smo-logo.png"/><h1>&nbsp;St. Mary's Orphanage & Day School</h1><p>&nbsp;&nbsp;103, Dum Dum Road, Kolkata - 700030.</p></div>
		<br/>
		<hr/>
		<center><h2 class="header1">Student DataBase Management System</h2></center>
		<center><div class="message"><?php echo $message;?></div></center>
		<center>
			<fieldset>
			 <legend><b>Admin and Staff Login</b></legend>
			<form action="/signin.php" method="Post">
			<h4>Username</h4>
			<input type="text" id="username" name="username"><br/><br/>
			<h4>Password</h4>
			<input type="password" id="pass" name="pass"><br/><br/>
			<input type="submit" value="Submit" name="submit_data">
			<button class="button1"><a href="signup.html" class="sign">SignUp</a></button>
			<button class="button1"><a href="main window.html" class="sign">Home</a></button></center>
			</form>
		</center>
		<hr/>
</body>
</html>


	