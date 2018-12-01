<?php
// AP insert finished travel information into confirmed purchases within MySQL database //
include("include/variables.php");
include("include/functions.php");
	
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

