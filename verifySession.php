<?php
/*
	Author: Jonathan Pirca
	Date: Nov 30th, 2018; 
    Details: Check if the user is already logged id.
*/
?>
<?php
	session_cache_expire(10);
	session_start();
	
	// Get the package ID and set up the session variable
	$_SESSION["packages"] = $_REQUEST["pckId"];
	
	// Check if user was logged before, then user does not have to loggin again
	if (!isset($_SESSION["logged"]))
	{
		header("location: login.php");
	}
	else
	{
		header("location: form.php");
	}
?>