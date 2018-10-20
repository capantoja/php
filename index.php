<?php

	include("connect.php"); 	
	
	$link=Connection();

  $result=mysql_query("SELECT * FROM DataLog",$link) or die("Database query ERROR: " . mysql_error());
    
?>

<html>
   <head>
      <title>BikeTracker</title>
   </head>
<body>
   <h1>BikeTracker Server </h1>

      <?php 	
		
            echo "<table>"; // start a table tag in the HTML

            while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
                      echo "<tr><td>" . $row['Fecha'] . "</td><td>" . $row['Dato'] . "</td></tr>";
                 }

            echo "</table>"; //Close the table in HTML


		     mysql_free_result($result);
		     mysql_close($link);
		  
		 
      ?>

  
</body>
</html>


