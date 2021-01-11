<html>
<body>
<h2>Albumn Table</h2>
<h3>Insert a new Albumn</h3>
<form action="insertalbum.php" method="POST">

Title: <input type="text" name="title" maxlength=500 size=50 required><br><br>

Band: <select name='bid'>

<?php

$con = mysqli_connect("db.soic.indiana.edu","i308f18_team83","my+sql=i308f18_team83", 
"i308f18_team83");


if (mysqli_connect_errno())
{echo nl2br("Failed to connect to MySQL: " . mysqli_connect_error() . "\n ");}
else 
{echo nl2br("Established Database Connection \n");}


$result= mysqli_query($con,"SELECT distinct bid, name FROM band");

while ($row = mysqli_fetch_assoc($result))
{
	unset($id,$name);
	$id = $row['bid'];
	$name = $row['name'];
	echo '<option value="'.$id.'">'.$name.'</option>';
}
?>
</select></br><br>

Published Year: <input type="number" name="pyear" min="1900" max="2020" required><br><br>

Publisher: <input type="text" name="title" maxlength=500 size=50 required><br><br>

Format: <select name="format">
    <option value=Albumn"/ >Albumn</option>
    <option value="CD">CD</option>
    <option value="WAV">WAV</option>
    <option value="MP3">MP3</option>
  </select><br><br>
  
Price: $<input type="number" name="price" min="0" max="99999.99" step="0.01" required> Between $0 and $99,999.99<br><br>

<input type="submit" value="Insert Albumn">  
</form>


<h3>Select all Albumns</h3>
<form action="selectalbum.php" method="post">
<input type="submit" name="submit" value="Select Albumn table">  
</form>
</body>
</html>
