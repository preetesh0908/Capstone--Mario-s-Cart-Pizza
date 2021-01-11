<?php


$con = mysqli_connect("db.soic.indiana.edu","i308f18_team83","my+sql=i308f18_team83", 
"i308f18_team83");
// Check connection
if (mysqli_connect_errno())
{echo nl2br("Failed to connect to MySQL: " . mysqli_connect_error() . "\n ");}
else 
{echo nl2br("Established Database Comnection \n");}

	
$fname = mysqli_real_escape_string($con,$_POST['fname']);
$lname = mysqli_real_escape_string($con,$_POST['lname']);
$dob = mysqli_real_escape_string($con,$_POST['dob']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);

$sql="INSERT INTO artist(fname, lname, dob, gender) VALUES('$fname','$lname','$dob','$gender')";

if (!mysqli_query($con,$sql))
{die('Error: ' . mysqli_error($con));}

echo "1 record added";

mysqli_close($con);


?>
