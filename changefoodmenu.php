<?php
$con = mysqli_connect("db.sice.indiana.edu", "i495u20_ppatodi", "my+sql=i495u20_ppatodi","i495u20_ppatodi");

if (mysqli_connect_errno())
{echo nl2br ("Failed to connect to MySQL: " . mysqli_connect_error() . "\n");}
else
{echo nl2br ("Establish Database Connection \n");}



//Variables for SQL Table Insertion 

$sanbfoodid = mysqli_real_escape_string ($con, $_POST['form_foodid']);

$sanbfoodname = mysqli_real_escape_string ($con, $_POST['form_foodname']);

$sanbfoodprice = mysqli_real_escape_string ($con, $_POST["form_foodprice"]);


$sanbfooddescription = mysqli_real_escape_string ($con, $_POST["form_fooddescription"]);

$sanbfoodstatus = mysqli_real_escape_string ($con, $_POST["form_foodstatus"]);

$sanbfoodcategory = mysqli_real_escape_string ($con, $_POST["form_foodcategory"]);

//Insert query to insert food menu items into FoodMenu table

echo "'$sanbfoodid'"; 
echo $sanbfoodname; 
echo $sanbfoodprice;    

$sql = "UPDATE FoodMenu SET FoodName = '$sanbfoodname', FoodPrice = $sanbfoodprice, FoodDescription = '$sanbfooddescription', FoodStatus = '$sanbfoodstatus', FoodCategory = '$sanbfoodcategory' WHERE FoodID = $sanbfoodid";

//Error Check Needed for SQL Insertion 

if (!mysqli_query ($con,$sql))
{die ('Error:' . mysqli_error($con));}


echo "1 record changed";
mysqli_close($con);
?>




<html> 
	<head> 
		<meta http-equiv="Refresh" content="0; url=http://cgi.sice.indiana.edu/~ppatodi/OurMenuItemChanged.html" /> 

	</head>


	<body> 
		

		
		<p> Follow this link to return if not automatically redirected <a href="http://cgi.sice.indiana.edu/~ppatodi/OurMenuItemChanged.html </a> </p> 



	</body>


</html> 
