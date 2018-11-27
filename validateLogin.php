<?php
	include "include/variables.php";
	include "include/functions.php";
	
	
	
	if (!isset($_REQUEST["user"]))
	{
		header("location: login.php");
		
	}
	else
	{

		$user = $_REQUEST["user"];
		$pass = hash("ripemd160",$_REQUEST["pass"]);
		
		
		// Create a connection
		$conn = dbconnectJon();
	
		// Check if connection was made
		if (!$conn)
		{
			echo("error 1");
			exit();
		
			print("Connection error: " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "<br />");
			exit();
		}
	
		$sql = "select CustPassword from customers where CustLogin = ?";
		$stmt = mysqli_prepare($conn,$sql);
		mysqli_stmt_bind_param($stmt,"s",$user);
	
		// if error preparing the stament
		if (!mysqli_stmt_execute($stmt))
		{
			mysqli_close($conn);
			header("Location: login.php");
		}
	
		$result = mysqli_stmt_get_result($stmt);
	
		if ($password = mysqli_fetch_array($result))
		{
			if ($password[0] == $pass)
			{
				$_SESSION["logged"] = true;
				mysqli_close($conn);
				header("Location: createOrder.php");
			}
			else
			{
				mysqli_close($conn);
				header("Location: login.php");
			}
		}
		else
		{
			mysqli_close($conn);
			header("Location: login.php");
		}
		
	}
?>