<!-- Author: Chris Potvin and Abel Rojas; Date: Nov 30th, 2018;
     Details: Insert customers into mySQL database php code  -->

<?php
// CP insert customers into mySQL database php code //
include("include/variables.php");
include("include/functions.php");


	if (!isset($_REQUEST["CustFirstName"]))
	{
		header("Location: Registration.php");
	}

	$dbh = dbconnect();

	$customers = array();

	foreach ($_REQUEST as $key => $value)
	{
		$customers[$key] = $value;
	}
	if (insertcustomer($customers))
	{
		header("Location: SucReg.php");
	}
	else
	{
		print("Insert failed. Call Tech Support.");
	}
// End of CP insert customers into mySQL database php code //

?>
