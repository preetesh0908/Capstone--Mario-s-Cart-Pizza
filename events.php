<html> 
	<head> 
		<title> Events at Mario's Cart Pizza </title> 
		<link href="bootstrap-grid.min.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	</head>


	<body> 
		

		<p class="menu">

                <a href="mainpage.html">	<button class="button"> Return to Homepage </button></a>
		<a href="AboutUS.html">         <button class="button"> About Our Restaurant </button></a>
		<a href="News.html">            <button class="button"> Restaurant News </button></a>
		<a href="Events.html">          <button class="button"> Special Events </button></a>
		<a href="OurMenu.html">      <button class="button"> Our Menu </button></a>
		<a href="Contact.html">         <button class="button"> Talk With Us! </button></a>
		<a href="EmployeeLogin.html">   <button class="button"> Employee Login Page </button></a>
		
		

       		</p>







		<h1> Upcoming Events at Mario's Cart Pizza</h1> 

        	<h2> All Current & Past Events in Table Below </h2>

			<br />	
			<br />	

			
			<table style="bootstrap-grid.min.css"> 
			<tr style = "bootstrap-grid.min.css">
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
 
				$sql = "SELECT EventTitle, EventDate, EventVenue, EventDescription, EventStatus FROM Events WHERE EventStatus != 'cancelled'  ORDER BY EventDate ASC"; 

 

 
				$result = mysqli_query ($con, $sql); 



 
			
				if (mysqli_num_rows($result) >0) {
					while ($row = mysqli_fetch_assoc($result)){
					$eventtitle = $row["EventTitle"];
					$eventdate = $row["EventDate"];
					$eventvenue = $row["EventVenue"];
					$eventdescription = $row["EventDescription"];
					$eventstatus = $row["EventStatus"]; 
					
					
					echo "<tr style = 'bootstrap-grid.min.css'>";
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
		

		
		
		
		
		<br />
		<br />
		<br />		
		
		<br />
		<br />
		<br />	
		
		
		
		
		
		
		
		
				


	</body>


</html> 
