<?php
function db_connect()
{
	session_start();
	global $db;
	$DB_NAME = "fashion_finder_store";
	$DB_HOST = "mysql.fashion-finder.store";
	$DB_USER = "fashionfindersto";
	$DB_PASS = "8k4SUezj";
	
	// Try and connect using the info above.
	$db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	if ( mysqli_connect_errno() ) {
		// If there is an error with the connection, stop the script and display the error.
		exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
}
?>