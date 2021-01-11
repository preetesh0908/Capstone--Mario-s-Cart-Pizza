<?php
$con = mysqli_connect("db.sice.indiana.edu", "i495u20_ppatodi", "my+sql=i495u20_ppatodi","i495u20_ppatodi");

if (mysqli_connect_errno())
{echo nl2br ("Failed to connect to MySQL: " . mysqli_connect_error() . "\n");}
else
{echo nl2br ("Establish Database Connection \n");}
 

//Variables for SQL Table Insertion 

$sanbusername = mysqli_real_escape_string ($con, $_POST['username']);

$sanbpassword = mysqli_real_escape_string ($con, $_POST['password']);


//Insert query to insert food menu items into FoodMenu table

$sql = "SELECT * FROM EmpLogin WHERE Username = '$sanbusername' AND Password = BINARY '$sanbpassword'";

echo $sql;


$returnuser = mysqli_query ($con, $sql);
$num_rows = mysqli_num_rows($returnuser);

echo "selected " . $num_rows . " rows\n";

if ($num_rows > 0) {
	//echo "Valid User"; 
	header("Location: http://cgi.sice.indiana.edu/~ppatodi/InternalMainPage.html");
}
else {
	//echo "invalid user";
	header("Location: http://cgi.sice.indiana.edu/~ppatodi/employeeloginwrong.html");
}

//Error Check Needed for SQL Insertion 


mysqli_close($con);
?>




		
		gapi.load('auth2', function() {
			auth2 = gapi.auth2.init({
				client_id: 'CLIENT_ID.apps.googleusercontent.com',
				fetch_basic_profile: false,
				scope: 'profile'
			});

			// Sign the user in, and then retrieve their ID.
			auth2.signIn().then(function() {
				console.log(auth2.currentUser.get().getId());
			});
		});
