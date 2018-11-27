<?php
	session_cache_expire(10);
	session_start();
	
	$_SESSION["packages"] = $_REQUEST["pckId"];
	
	if (!isset($_SESSION["logged"]))
	{
		header("location: login.php");
	}
	else
	{
		header("location: createOrder.php");
	}
?>