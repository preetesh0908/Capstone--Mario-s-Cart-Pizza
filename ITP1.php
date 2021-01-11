<?php

/* Heading for Name and Username  */
  echo "<strong> NAME:</strong> Preetesh Patodi";
  echo "<br>";
  echo "<strong> USERNAME:</strong> ppatodi";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  
  /* defining "$time" variable and setting timezone  */
  $time = date("H:i:s");
  $timezone = date("e");
  
  /* code for morning greeting */
    if ($time > "5:45:00" && $time < "12:00:00") {
        echo "Good Morning";
    } else
    
  /* code for afternoon greeting */ 
   if ($time >= "12:00:00" && $time < "18:00:00") {
        echo "Good Afternoon";
    } else
    
  /* code for evening greeting */  
    if ($time >= "18:00:00" && $time < "5:00:00") {
        echo "Good Evening";
    }
    
?>
