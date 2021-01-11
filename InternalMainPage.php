<?php

session_start();

?>



<html> 
	<head> 
		<title> Employee MainPage </title> 
		<link href="bootstrap-grid.min.css" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	</head>

	
	
	
	
	
	

	<body> 
	
		
		
		<?php 
		
		
		$email = $_SESSION['userloggedin'];
		
		if (strlen($email) <=0 ){
			header("Location: http://cgi.sice.indiana.edu/~ppatodi/EmployeeLogin.html");
		}
			
		else {
			echo "welcome $email"; 
			}
		
		?> 

		
		

		<p class="menu">

                <a href="mainpage.html">	<button class="button"> (Client) Return to Homepage </button></a>
		<a href="AboutUS.html">         <button class="button"> (Client) About Our Restaurant </button></a>
		<a href="News.html">            <button class="button"> (Client) Restaurant News </button></a>
		<a href="Events.html">          <button class="button"> (Client) Special Events </button></a>
		<a href="OurMenu.html">      <button class="button"> (Client) Our Menu </button></a>
		<a href="Contact.html">         <button class="button"> (Client) Talk With Us! </button></a>
		<a href="EmployeeLogin.html">   <button class="button"> (Client) Employee Login Page </button></a>
		
		

       		</p>







		<h1> Internal Employee Maintenance Page </h1> 

		
		<br />  
	
		<br /> 
		<br /> 


		<h2> Click Below to Add, Update, or Remove Items from the Menu  </h2>


		<br /> 
		<br /> 
		<a href="changemenu.html">   <button class="button"> Click To Change the Menu </button></a>
		<br /> 

		<br /> 
		<br /> 
		<br /> 




		<h2> Click Below to Add, Update, or Remove Events from the Events Page  </h2>


		<br /> 
		<br /> 
		<a href="changeevents.html">   <button class="button"> Click To Change the Events Page </button></a>
		<br /> 
		<br /> 
		<br /> 
		<br />






		
		
		<h2> Customer Messages, Complaints, Concerns, Contacts </h2> 
		<a href="customermessages.php">   <button class="button"> Click Below to See Customer Messages </button></a>


		<br /> 
		<br /> 
		<br /> 




	</body>


</html> 
