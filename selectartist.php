<?php
$con=mysqli_connect("db.soic.indiana.edu","i308f18_team91","my+sql=i308f18_team91","i308f18_team91");


if (mysqli_connect_errno())
    {echo nl2br("failed to connect to MySQL: " . mysqli_connect_error(). "\n") ;}
else
    {echo nl2br("Established Database Connection \n");}



$sql = "select * FROM  artist";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table>
		<tr>
			<th> First name </th>
			<th> last name </th>
			<th> DOB </th>
			<th> Gender </th>
		</tr>";
	While ($row = mysqli_fetch_assoc($result)){
		echo " <tr>
			<td>" .$row['fname']. "</td>
			<td>" .$row['lname']. "</td>
			<td>" .$row['dob']. "</td>
			<td>" .$row['gender']. "</td>
			</tr>";
		}
		echo "</table>";
} else {
	echo "0 results";
}

if (!mysqli_query($con,$sql))
    {die('Error: ' . mysqli_error($con));}

mysqli_close($con);
?>