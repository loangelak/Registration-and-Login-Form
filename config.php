<?php
	$dbhost='localhost'; 
	$dbuser='root';
	$dbpass='root'; 
	$dbname='login_system';

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if($conn->connect_error){
		die("Could not connect to the database!".$conn->connect_error);
	}
	
?>