<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	session_start();
	$connection = mysqli_connect('localhost', 'root', 'root', 'adminlte');
	
	// $_SESSION['username']
	$myAccountResults = mysqli_query($connection,"SELECT * FROM user WHERE username='".$_SESSION['username']."'");
	$myAccountResultsRow = mysqli_fetch_assoc($myAccountResults);
	
	$userFname =  $myAccountResultsRow['name'];
	$userName =  $myAccountResultsRow['username'];
	$userEmail =  $myAccountResultsRow['email'];
	$userPosition =  $myAccountResultsRow['position'];
	$userOfficeNumber =  $myAccountResultsRow['officeNumber'];
	$userCellNumber =  $myAccountResultsRow['cellNumber'];
	$userAccountType =  $myAccountResultsRow['accountType'];
	$userPassword =  $myAccountResultsRow['password'];
	
	
	
	
	
	
	
	
	
	
?>




















