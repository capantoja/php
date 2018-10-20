<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>BikeTracker</title>
</head>
<body>

<?php
 /*
 if(isset($_POST['name'])){ $name = $_POST['name']; echo "El dato recibido es: $name"; } 
 else { echo "No hay dato disponible"; }
 */

?>

</body>
</html>
-->

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


