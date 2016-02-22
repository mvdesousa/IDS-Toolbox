<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
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
	$userNewPassword =  $myAccountResultsRow['newpassword'];
	
	$_SESSION['userFname'] = $userFname;
	$_SESSION['userName'] = $userName;
	$_SESSION['userEmail'] = $userEmail;
	$_SESSION['userPosition'] = $userPosition;
	$_SESSION['userOfficeNumber'] = $userOfficeNumber;
	$_SESSION['userCellNumber'] = $userCellNumber;
	$_SESSION['userAccountType'] = $userAccountType;
	$_SESSION['userPassword'] = $userPassword;
	$_SESSION['userNewPassword'] = $userNewPassword;
	
	
	/* ------------------------------------------------------------- start PASSWORD ENCRYPTION ------------------------------------------------------------- */
	//$key = 'password1'; //password to (en/de)crypt
	//$string = ' password2 '; //string to be encryptedPassword, note the spaces
	
	
	$iv = mcrypt_create_iv(
		mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
		MCRYPT_DEV_URANDOM
	);

	$encryptedPassword = base64_encode(
		$iv .
		mcrypt_encrypt(
			MCRYPT_RIJNDAEL_128,
			hash('sha256', $userPassword, true),
			$userPassword,
			MCRYPT_MODE_CBC,
			$iv
		)
	);
	
	
	
	$data = base64_decode($encryptedPassword);
	$iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

	$decryptedPassword = rtrim(
		mcrypt_decrypt(
			MCRYPT_RIJNDAEL_128,
			hash('sha256', $userPassword, true),
			substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
			MCRYPT_MODE_CBC,
			$iv
		),
		"\0"
	);
	/* ------------------------------------------------------------- end PASSWORD ENCRYPTION ------------------------------------------------------------- */
?>




















