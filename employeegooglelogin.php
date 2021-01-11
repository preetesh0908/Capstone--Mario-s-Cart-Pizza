<?php
$con = mysqli_connect("db.sice.indiana.edu", "i495u20_ppatodi", "my+sql=i495u20_ppatodi","i495u20_ppatodi");

if (mysqli_connect_errno())
{echo nl2br ("Failed to connect to MySQL: " . mysqli_connect_error() . "\n");}
else
{echo nl2br ("Establish Database Connection \n");}
 

//Variables for SQL Table Insertion 

$sanbname = mysqli_real_escape_string ($con, $_GET['Name']);

$sanbemail = mysqli_real_escape_string ($con, $_GET['email']);


//Insert query to insert food menu items into FoodMenu table

$sql = "SELECT * FROM EmpGoogleLogin WHERE Email = '$sanbemail'";

echo $sql;
echo $sanbname;
echo $sanbemail;


$returnuser = mysqli_query ($con, $sql);
$num_rows = mysqli_num_rows($returnuser);

echo "selected " . $num_rows . " rows\n";

if ($num_rows > 0) {
	//echo "Valid User"; 
	session_start();
	$_SESSION['userloggedin'] = $sanbemail;
	
	header("Location: http://cgi.sice.indiana.edu/~ppatodi/InternalMainPage.php");
}
else {
	//echo "invalid user";
	header("Location: http://cgi.sice.indiana.edu/~ppatodi/employeeloginwrong.html");
}

//Error Check Needed for SQL Insertion 


mysqli_close($con);
?>

