<html> 
	<head> 
		<title> Menu for Mario's Cart Pizza </title> 
		<link href="bootstrap-grid.min.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	</head>


	<body> 
		

		<p class="ourmenu">

        <a href="mainpage.html">	<button class="button"> Return to Homepage </button></a>
		<a href="AboutUS.html">         <button class="button"> About Our Restaurant </button></a>
		<a href="News.html">            <button class="button"> Restaurant News </button></a>
		<a href="Events.html">          <button class="button"> Special Events </button></a>
		<a href="OurMenu.html">      <button class="button"> Our Menu </button></a>
		<a href="Contact.html">         <button class="button"> Talk With Us! </button></a>
		<a href="EmployeeLogin.html">   <button class="button"> Employee Login Page </button></a>
		
		

       		</p>



		<h1> Menu for Mario's Cart Pizza </h1> 
		<h2>  Our Full Menu</h2> 
		<br /> 


		
		<table style="bootstrap-grid.min.css"> 
			<tr style = "bootstrap-grid.min.css">
				<th>Food Name</th>
				<th>Food Price </th>
				<th>Food Description </th>
				<th>Food Status </th>
				<th>Food Category </th>
			</tr>
			
			<?php
				$con = mysqli_connect("db.sice.indiana.edu", "i495u20_ppatodi", "my+sql=i495u20_ppatodi","i495u20_ppatodi");

				if (mysqli_connect_errno())
				{echo nl2br ("Failed to connect to MySQL: " . mysqli_connect_error() . "\n");}
				else
				{echo nl2br ("**Menu Items Live** \n");}
 
				$sql = "SELECT FoodName, FoodPrice, FoodDescription, FoodStatus, FoodCategory FROM FoodMenu WHERE FoodStatus = 'Available'  ORDER BY FoodCategory ASC"; 

 

 
				$result = mysqli_query ($con, $sql); 



 
			
				if (mysqli_num_rows($result) >0) {
					while ($row = mysqli_fetch_assoc($result)){
					$foodname = $row["FoodName"];
					$foodprice = $row["FoodPrice"];
					$fooddescription = $row["FoodDescription"];
					$foodstatus = $row["FoodStatus"];
					$foodcategory = $row["FoodCategory"]; 
					
					
					echo "<tr style = 'bootstrap-grid.min.css'>";
						echo "<td> $foodname </td>"; 
						echo "<td> $$foodprice </td>"; 
						echo "<td> $fooddescription </td>"; 
						echo "<td> $foodstatus </td>"; 
						echo "<td> $foodcategory </td>"; 
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

		<h2> New Items! </h2> 
		<img src="images/image8.jpg"/>   
		<p>  Tiramisu </p>
		
		
		
		<br /> 
		<br /> 		
		<br /> 
		<br /> 
		<br /> 




	</body>


</html> 
