<?php

	function Connection(){
		$server=getenv('mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT');
		$user="biketracker";
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
