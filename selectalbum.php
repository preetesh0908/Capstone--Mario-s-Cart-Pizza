<?php


$con = mysqli_connect("db.soic.indiana.edu","i308f18_team83","my+sql=i308f18_team83", 
"i308f18_team83");


if (mysqli_connect_errno())
{echo nl2br("Failed to connect to MySQL: " . mysqli_connect_error() . "\n ");}
else 
{echo nl2br("Established Database Connection \n");}
	

$sql="SELECT * FROM album";



$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Album ID: " . $row["albumid"]. " - Published Year: " . $row["published_year"]. "- Title: ". $row["title"]. "- Price: " .$row["price"] ."<br>";
    }
} else {
    echo "0 results found";
}

if (!mysqli_query($con,$sql))
{die('Error: ' . mysqli_error($con));}

mysqli_close($con);


?>