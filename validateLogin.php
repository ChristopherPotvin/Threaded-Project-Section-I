<?php
/*
	Author: Jonathan Pirca
	Date: Nov 29th, 2018;
    Details: Get user and pass form loging form and validate.
*/
?>
<?php
	session_cache_expire(10);
	session_start();
	// Common files to use
//	include "include/variables.php";
	include "include/functions.php";


	// Validate user is comming from login page
	if (!isset($_REQUEST["user"]))
	{
		header("location: login.php");

	}
	else
	{
		// Get user and pass. The pass is encrypted in order to compare with the DB
		$username = $_REQUEST["user"];
		$pass = hash("ripemd160",$_REQUEST["pass"]);


		// Create a connection
		$conn = dbconnect();

		// Check if connection was made
		if (!$conn)
		{
				print("Connection error: " . mysqli_connect_errno() . " : " . mysqli_connect_error() . "<br />");
			exit();
		}

		// Look for if there is any user with the user ID submmited
		$sql = "select CustPassword, CustomerId from customers where CustUserId = ?";
		$stmt = mysqli_prepare($conn,$sql);
		mysqli_stmt_bind_param($stmt,"s",$username);

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
				$_SESSION["customerNumber"] = $password[1];
				mysqli_close($conn);
				header("Location: form.php");
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
