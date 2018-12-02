<?php
	//Author: Alex Procyk and Jonathan Pirca;
	//Date: Nov 30th, 2018;
	//Details: Validating code for the successful entry of package purchase information
	
	
	// AP insert finished travel information into confirmed purchases within MySQL database //
include("include/variables.php");
include("include/functions.php");

	//code to cross-reference and validate the entry completed into the data base
	
	if (!isset($_REQUEST["TravelerCount"]))
	{
		header("Location: form.php");
	}
	
	$customers = array();

	foreach ($_REQUEST as $key => $value)
	{
		$packages[$key] = $value;
	}
	if (purchasepackage($packages))
	{
		header("Location: SucOrd.php");
		// Redirection to Success Order php page
	}
	else
	{
		print("Insert failed. Please try again or contact an agent.");
	}
?>

