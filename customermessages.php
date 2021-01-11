<html> 
	<head> 
		<title> Customer Messages Page </title> 
		<link href="bootstrap-grid.min.css" rel="stylesheet" type="text/css">
	</head>


	<body> 
		

		<p class="messages">

        <a href="InternalMainPage.html">	<button class="button"> Click To Return to Employee Homepage </button></a>


       		</p>





		<h1> Customer Messages Database  </h1> 
		
		<br />
		<br />
		

		
		<table style="bootstrap-grid.min.css"> 
			<tr style = "bootstrap-grid.min.css">
				<th>Message ID</th>
				<th>First Name</th>
				<th>Last Name </th>
				<th>Email  </th>
				<th>Question Type </th>
				<th>Message Content </th>
			</tr>
			
			<?php
				$con = mysqli_connect("db.sice.indiana.edu", "i495u20_ppatodi", "my+sql=i495u20_ppatodi","i495u20_ppatodi");

				if (mysqli_connect_errno())
				{echo nl2br ("Failed to connect to MySQL: " . mysqli_connect_error() . "\n");}
				else
				{echo nl2br ("Customer Messages \n");}
 
				$sql = "SELECT MessageID, FirstName, LastName, Email, QuestionType, MessageContent FROM MessageForm ORDER BY MessageID ASC"; 

 

 
				$result = mysqli_query ($con, $sql); 



 
			
				if (mysqli_num_rows($result) >0) {
					while ($row = mysqli_fetch_assoc($result)){
					$messageid = $row["MessageID"]; 
					$firstname = $row["FirstName"];
					$lastname = $row["LastName"];
					$email = $row["Email"];
					$questiontype = $row["QuestionType"];
					$messagecontent = $row["MessageContent"]; 
					
					
					echo "<tr style = 'bootstrap-grid.min.css'>";
						echo "<td> $messageid </td>"; 
						echo "<td> $firstname </td>"; 
						echo "<td> $lastname </td>"; 
						echo "<td> $email </td>"; 
						echo "<td> $questiontype </td>"; 
						echo "<td> $messagecontent </td>"; 
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