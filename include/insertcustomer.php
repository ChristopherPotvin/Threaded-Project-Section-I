<?php
// CP insert customers into mySQL database php code //
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
		header("SucReg.php");
	}
	else
	{
		print("Insert failed. Call Tech Support.");
	}
	
?>