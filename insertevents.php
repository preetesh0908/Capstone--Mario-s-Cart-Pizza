<?php
$con = mysqli_connect("db.sice.indiana.edu", "i495u20_ppatodi", "my+sql=i495u20_ppatodi","i495u20_ppatodi");

if (mysqli_connect_errno())
{echo nl2br ("Failed to connect to MySQL: " . mysqli_connect_error() . "\n");}
else
{echo nl2br ("Establish Database Connection \n");}
 


//Variables for SQL Table Insertion 

$sanbeventtitle = mysqli_real_escape_string ($con, $_POST['form_eventtitle']);

$sanbeventdate = mysqli_real_escape_string ($con, $_POST['form_eventdate']);


$sanbeventlocation = mysqli_real_escape_string ($con, $_POST['form_eventlocation']);

$sanbeventdescription = mysqli_real_escape_string ($con, $_POST['form_eventdescription']);

$sanbeventstatus = mysqli_real_escape_string ($con, $_POST['form_eventstatus']);

//Insert query to insert food menu items into Events table

$sql = "INSERT INTO Events (EventTitle, EventDate, EventVenue, EventDescription, EventStatus) VALUES ('$sanbeventtitle','$sanbeventdate', '$sanbeventlocation', '$sanbeventdescription', '$sanbeventstatus')";

//Error Check Needed for SQL Insertion 

if (!mysqli_query ($con,$sql))
{die ('Error:' . mysqli_error($con));}


echo "1 record added";
mysqli_close($con);
?>




<html> 
	<head> 
		<meta http-equiv="Refresh" content="0; url=http://cgi.sice.indiana.edu/~ppatodi/eventupdatedsuccess.html" /> 

	</head>


	<body> 
		

		
		<p> Follow this link to return if not automatically redirected <a href="http://cgi.sice.indiana.edu/~ppatodi/eventupdatedsuccess.html</a> </p> 


	</body>


</html> 
