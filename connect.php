<?php

	function Connection(){
		$server=getenv('mysql://mysql:3306/');
		$user="biketracker_user";
		$pass="063a1f4ec";
		$db="biketrackerdb";
	   	
		$connection = mysql_connect($server, $user, $pass);

		if (!$connection) {
	    	die('connection mysql ERROR: ' . mysql_error());
		}
		
		mysql_select_db($db) or die( 'mysql_select_db ERROR: '. mysql_error() );

		return $connection;
	}
?>
