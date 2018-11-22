<?php
include("variables.php");
include("functions.php");

	
	if (!isset($_REQUEST["CustFirstName"]))
	{
		header("Location: registration.php");
	}

	$dbh = dbconnect();
	
	$customers = array();

	foreach ($_REQUEST as $key => $value)
	{
		$customers[$key] = $value;
	}
	if (insertcustomer($customers))
	{
		print("Agent  data inserted into database successfully");
	}
	else
	{
		print("Insert failed. Call Tech Support.");
	}
	
?>