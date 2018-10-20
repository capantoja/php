<?php

	include("connect.php"); 	
	
	$link=Connection();

  $result=mysql_query("SELECT * FROM BikeTracker",$link) or die("Database query ERROR: " . mysql_error());
    
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
                      echo "<tr><td>" . $row['id'] . "</td><td>" . $row['Timestamp'] . "</td></tr>"  . "</td><td>" . $row['lat']  . "</td><td>" . $row['lon'] . "</td><td>" . $row['speed']  . "</td><td>" . $row['bearing']  . "</td><td>" . $row['altitude']  . "</td><td>" . $row['accuracy']  . "</td><td>" . $row['batt']. "</td><td>";
                 }

            echo "</table>"; //Close the table in HTML


		     mysql_free_result($result);
		     mysql_close($link);
		  
		 
      ?>

  
</body>
</html>


id=%s&timestamp=%d&lat=%f&lon=%f&speed=%f&bearing=%.1f&altitude=%f&accuracy=%.1f&batt=%.1f"