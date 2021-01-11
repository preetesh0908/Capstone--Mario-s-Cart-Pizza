<?php
$con = mysqli_connect("db.sice.indiana.edu", "i495u20_ppatodi", "my+sql=i495u20_ppatodi","i495u20_ppatodi");
if (mysqli_connect_errno())
{echo nl2br ("Failed to connect to MySQL: " . mysqli_connect_error() . "\n");}
else
{echo nl2br ("Establish Database Connection \n");}
 
//Variables for SQL Table Deletion 
$sanbeventid = mysqli_real_escape_string ($con, $_POST['form_eventid']);
//Insert query to insert food menu items into Events table
$sql = "DELETE FROM Events WHERE EventID = $sanbeventid";
//Error Check Needed for SQL Deletion 
if (!mysqli_query ($con,$sql))
{die ('Error:' . mysqli_error($con));}
echo "1 record deleted";
mysqli_close($con);
?>




<html> 
	<head> 
		<meta http-equiv="Refresh" content="0; url=http://cgi.sice.indiana.edu/~ppatodi/EventDeleted.html" /> 

	</head>


	<body> 
		

		
		<p> Follow this link to return if not automatically redirected <a href="http://cgi.sice.indiana.edu/~ppatodi/EventDeleted </a> </p> 
	</body>
</html> 







