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
$name = $_POST["name"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$class = intval($_POST["class"]);
$section = $_POST["sec"];
$second_language = $_POST["sl"];
$religion = $_POST["rel"];
$category = $_POST["spcat"];
$mode_trans = $_POST["mot"];
$homeadd = $_POST["homeadd"];
$homephone = $_POST["homephone"];
$studentphone = $_POST["studentphone"];



$sql = "INSERT INTO STUDENT (classroll, name, dob, email, class, section, sec_lang, religion, category, mode_of_transport, home_address,homephone,student_phone)
 VALUES ('$classroll','$name','$dob','$email', $class,'$section','$second_language','$religion','$category','$mode_trans','$homeadd','$homephone','$studentphone')";

if($conn->query($sql)===TRUE)
{
  echo "Student Record Created Successfully".'<br>';
}
else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$fathername = $_POST["faname"];
$fatheroccu = $_POST["faoccu"];
$famobile = $_POST["faphone"];
$faoffadd = $_POST["faoffadd"];
$faoffphone = $_POST["faoffnum"];

$sql1 = "INSERT INTO FATHER (classroll, name, father_name, father_occupation, father_mobile, father_office_Add, father_office_Phone)
 VALUES ('$classroll','$name','$fathername','$fatheroccu','$famobile','$faoffadd','$faoffphone')";

if($conn->query($sql1)===TRUE)
{
  echo "Father Record Created Successfully".'<br>';
}
else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$mothername = $_POST["moname"];
$motheroccu = $_POST["mooccu"];
$momobile = $_POST["mophone"];
$mooffadd = $_POST["mooffadd"];
$mooffphone = $_POST["mooffnum"];

$sql2 = "INSERT INTO MOTHER (classroll, name, mother_name, mother_occupation, mother_mobile, mother_office_Add, mother_office_Phone)
 VALUES ('$classroll','$name','$mothername','$motheroccu','$momobile','$mooffadd','$mooffphone')";

if($conn->query($sql2)===TRUE)
{
  echo "Mother Record Created Successfully".'<br>';
}
else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$broname = $_POST["broname"];
$broclass = $_POST["broclass"];
$brosec = $_POST["brosec"];

if($broname!="")
{
  $sql3 = "INSERT INTO BROTHER (classroll, name, brother_name, brother_class, brother_sec)
  VALUES ('$classroll','$name','$broname','$broclass','$brosec')";

  if($conn->query($sql3)===TRUE)
  {
    echo "BROTHER Record Created Successfully".'<br>';
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>