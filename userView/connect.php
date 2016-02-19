<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	$connection = mysqli_connect('localhost', 'root', 'root', 'adminlte');
	
	// Check connection
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>