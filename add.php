<?php
   	include("connect.php");


if (isset($_POST['name']))
    {
	   $name = $_POST['name'];
    }
else
    {
      $name = "No hay Dato";
    }      

      $now = date("Y-m-d H:i:s");
      $link = Connection();
	   $query = "INSERT INTO `BikeTracker` (`id`, `timestamp`, `lat`, `lon`, `speed`, `bearing`, `altitude`, `accuracy`, `batt`) VALUES ('".$id."','".$timestamp."','".$lat."','".$lon."','".$speed."','".$bearing."','".$altitude."','".$accuracy."','".$batt."')"; 
   	
   	mysql_query($query,$link) or die('mysql query ERROR: '. mysql_error());
	   mysql_close($link);
      
   	header("Location: index.php");

?>
