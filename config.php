<?php
	session_start();
 	/* Database credentials. Assuming you are running MySQL server with default setting (user 'root' with no password) */
	define('DB_SERVER', 'hopethisworks.cvn9cccpnhwx.us-east-2.rds.amazonaws.com');
	define('DB_USERNAME', 'admin');
	define('DB_PASSWORD', 'Helloworld!');
	define('DB_NAME', 'Grocery_System');
 
	/* Attempt to connect to MySQL database */
	$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
	// Check connection
	if($mysqli === false){
    	die("ERROR: Could not connect. " . $mysqli->connect_error());
	}
?>