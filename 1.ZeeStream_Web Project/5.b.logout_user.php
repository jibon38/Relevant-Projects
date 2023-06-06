
<?php

	session_start();
 
	// Unset all of the session variables

	// Destroy the session.
	session_unset();
	
	session_destroy();
	 
	// Redirect to login page
	header("location: 5.login.php");
	exit;

?>