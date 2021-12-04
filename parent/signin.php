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

$admission_no = $_POST["admno"];
$name = $_POST["name1"];
$i = 0;
$j = 0;
$flag = 0;
$flag1 = 0;
//echo $admission_no.'<br>';
//echo $name.'<br>';

$csvfile = 'student_login.csv';
$file_handle = fopen($csvfile,'r');

while(!feof($file_handle))
{
    $arr = fgetcsv($file_handle);
    if($i!=0)
    {
        //echo $arr[0].'<br>';
        //echo $arr[1].'<br>';
        if($arr[0]==$admission_no and $arr[1]==$name)
        {
            echo '<center><h1>Hi '.$name.'. Welcome to this Portal!!!</h1></center>'.'<br>';
            echo '<center><h3>Your Admission Number is '.$admission_no.'.</h3></center>'.'<br>';
            $csvfile1 = 'student_details.csv';
            $file_handle1 = fopen($csvfile1,'r');
            while(!feof($file_handle1))
            {
                $arr1 = fgetcsv($file_handle1);
                if($j!=0)
                {
                    if($arr1[1]==$name and $arr1[13]=="Yes")
                    {
                        echo '<center><a href="/parent/form.html" class="button">Update Student Details</a>
		                <a href="/admin/admin_signin.php" class="button">Generate Student Profile</a>&nbsp
                        <a href="/index.php" class="button">Logout</a></center>';
                        echo '</fieldset><hr/>';
                        $flag1 = 1;
                        break;
                    }
                }
                $j = $j+1;
            }
            fclose($file_handle1);
            if($flag1==0)
            {
                echo '<center><a href="/parent/form.html" class="button">Fill Up Student Details</a>
		        <a href="/admin/admin_signin.php" class="button">Generate Student Profile</a>&nbsp
                <a href="/index.php" class="button">Logout</a></center>';
                echo '</fieldset><hr/>';      
            }
            $flag = 1;
            break;
        }
    }
    $i = $i + 1;
}
fclose($file_handle);
if($flag==0)
{
    echo '<center><h1>Login Unsuccessful!!!</h1></center>'.'<br>';
}
?>
</center>	
</body>
</html>

