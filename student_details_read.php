<?php

echo '<link href="style.css" rel="stylesheet" />';
$i = 0;
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

// To Read Student CSV File
$csvfile = 'student_details.csv';
$file_handle = fopen($csvfile, 'r');
while(!feof($file_handle))
{
    $arr = fgetcsv($file_handle);
    if($i!=0)
    {
    echo '<tr>';
    echo '<td>'.$arr[0].'</td>';
    echo '<td>'.$arr[1].'</td>';
    echo '<td>'.$arr[2].'</td>';
    echo '<td>'.$arr[3].'</td>';
    echo '<td>'.$arr[4].'</td>';
    echo '<td>'.$arr[5].'</td>';
    echo '<td>'.$arr[6].'</td>';
    echo '<td>'.$arr[7].'</td>';
    echo '<td>'.$arr[8].'</td>';
    echo '<td>'.$arr[9].'</td>';
    echo '<td>'.$arr[10].'</td>';
    echo '<td>'.$arr[11].'</td>';
    echo '<td>'.$arr[12].'</td>';
    echo '</tr>';
    }
    $i = $i + 1;
}
fclose($file_handle);



?>