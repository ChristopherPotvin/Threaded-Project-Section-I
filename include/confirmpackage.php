<?php
// AP insert finished travel information into confirmed purchases within MySQL database //
include("variables.php");
include("functions.php");
	
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
		print("Your package purchase is confirmed! Thank you for your patronage of Travel Experts, and we hope you enjoy your trip!");
	}
	else
	{
		print("Insert failed. Please try again or contact an agent.");
	}
?>

