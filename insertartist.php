<?php
$con=mysqli_connect("db.soic.indiana.edu","i308f18_team83","my+sql=i308f18_team83","i308f18_team83");

//check connection
if (mysqli_connect_errno())
{ echo nl2br("Failed to connect to MySQL: ".mysqli_connect_error(). "\n");}
else
{ echo nl2br("Established Database Connection \n");}

//escape variables for security sql injection
$artistfname = mysqli_real_escape_string($con, $_POST['artistfname']);
$artistlname = mysqli_real_escape_string($con, $_POST['artistlname']);
$artistdob = mysqli_real_escape_string($con, $_POST['artistdob']);
$artistgender = mysqli_real_escape_string($con, $_POST['artistgender']);

//Insert quert to insert form data into the artist table
$sql = "INSERT INTO artist(fname, lname, dob, gender) VALUES ('$artistfname','$artistlname','$artistdob','$artistgender')";
//check for error on insert
if(!mysqli_query($con,$sql))
{ die('Error: '.mysqli_error($con));}

echo "1 record added";
mysqli_close($con)
?>

