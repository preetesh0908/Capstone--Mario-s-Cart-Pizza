<html>
<body>

<a href="http://cgi.sice.indiana.edu/~ppatodi/changeevents.html">   <button class="button"> Click Here to Go Back to the Previous Page </button></a>

<table style="bootstrap-grid.min.css"> 
			<tr style = "bootstrap-grid.min.css">
				<th> Event ID </th>
				<th>Event Title</th>
				<th>Event Date </th>
				<th>Event Location </th>
				<th>Event Description </th>
				<th>Event Status  </th>
			</tr>
			
			
			
			<?php
				$con = mysqli_connect("db.sice.indiana.edu", "i495u20_ppatodi", "my+sql=i495u20_ppatodi","i495u20_ppatodi");

				if (mysqli_connect_errno())
				{echo nl2br ("Failed to connect to MySQL: " . mysqli_connect_error() . "\n");}
				else
				{echo nl2br ("\n");}
 
				$sql = "SELECT * FROM Events"; 

 

 
				$result = mysqli_query ($con, $sql); 



 
			
				if (mysqli_num_rows($result) >0) {
					while ($row = mysqli_fetch_assoc($result)){
					$eventid = $row["EventID"];
					$eventtitle = $row["EventTitle"];
					$eventdate = $row["EventDate"];
					$eventvenue = $row["EventVenue"];
					$eventdescription = $row["EventDescription"];
					$eventstatus = $row["EventStatus"]; 
					
					
					echo "<tr style = 'bootstrap-grid.min.css'>";
						echo "<td> $eventid </td>";
						echo "<td> $eventtitle </td>"; 
						echo "<td> $eventdate </td>"; 
						echo "<td> $eventvenue </td>"; 
						echo "<td> $eventdescription </td>"; 
						echo "<td> $eventstatus </td>"; 
					echo "</tr>"; 
						
						
						
					
					
					
					 
					}
				}

 
 
				mysqli_close($con);
				 
			?>
			
			
			

		</table>
		



</body>
</html>

