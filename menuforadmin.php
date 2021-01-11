
<html>

<body>

<a href="http://cgi.sice.indiana.edu/~ppatodi/changemenu.html">   <button class="button"> Click Here to Go Back to the Previous Page </button></a>

<table style="bootstrap-grid.min.css"> 
			<tr style = "bootstrap-grid.min.css">
				
				<th> Food ID</th>
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
				{echo nl2br (" \n");}
 
				$sql = "SELECT * FROM FoodMenu"; 

 

 
				$result = mysqli_query($con, $sql); 



 
			
				if (mysqli_num_rows($result) >0) {
					while ($row = mysqli_fetch_assoc($result)){
					$foodid = $row["FoodID"];
					$foodname = $row["FoodName"];
					$foodprice = $row["FoodPrice"];
					$fooddescription = $row["FoodDescription"];
					$foodstatus = $row["FoodStatus"];
					$foodcategory = $row["FoodCategory"]; 
					
					
					echo "<tr style = 'bootstrap-grid.min.css'>";
						echo "<td> $foodid </td>";
						echo "<td> $foodname </td>"; 
						echo "<td> $foodprice </td>"; 
						echo "<td> $fooddescription </td>"; 
						echo "<td> $foodstatus </td>"; 
						echo "<td> $foodcategory </td>"; 
					echo "</tr>"; 
						
						
						
					
					
					
					 
					}
				}

 
 
				mysqli_close($con);
				 
			?>

			
			
			
			
			
			
			
			

			
			

		</table>
		

</body>

</html>
