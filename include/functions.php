<?php
	/*
	Author: Chris Potvin, Alex Procyk, Abel Rojas and Jonathan Pirca;
	Date: Nov 30th, 2018;
	Details: PHP for connecting to database, Registration.php and Purchase page;
	*/
?>

<?php
// Function for connecting to database
	include("variables.php");

	function dbconnect()
	{
		global $host, $user, $pwd, $dbname;
		$dbh = mysqli_connect($host, $user, $pwd, $dbname);
		if (!$dbh)
		{
			print("Connection failed, call tech support");
			exit();
		}
		return $dbh;
	}

// Start of Chris Potvin's PHP function for Customer Registration page //
	function insertcustomer($customers)
	{
		$fn = $customers["CustFirstName"];
		$ln = $customers["CustLastName"];
		$ca =  $customers["CustAddress"];
		$cc = $customers["CustCity"];
		$cp = $customers["CustProv"];
		$cpp = $customers["CustPostal"];
		$ccc = $customers["CustCountry"];
		$chp = $customers["CustHomePhone"];
		$cbp = $customers["CustBusPhone"];
		$ce = $customers["CustEmail"];
		$caa = $customers["AgentId"];
		$cui = $customers["CustUserId"];
		$cup = hash("ripemd160",$customers["CustPassword"]);

		$dbh = dbconnect();
		// $dbh = mysqli_connect("localhost", "root", "", "travelexperts");

		$sql = "INSERT INTO `customers` (`CustFirstName`, `CustLastName`,
			 `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`,
			  `CustBusPhone`, `CustEmail`, `AgentId`, `CustUserId`, `CustPassword`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		// $statement = mysqli_stmt_prepare($dbh, $sql);
		$stmt = $dbh->prepare($sql);

		$stmt->bind_param("ssssssssssiss", $fn , $ln , $ca, $cc, $cp , $cpp , $ccc, $chp, $cbp, $ce, $caa, $cui, $cup);

		$result = $stmt->execute();

		if (!$result)
		{
			print(mysqli_stmt_error($stmt));
			return false;
		}
		$dbh->close();
		return true;
	}
	// End of Chris Potvin's PHP functions for Registration page
	// Start of Alex Procyk's PHP functions for Purchase page //

	function purchasepackage($packages)
	{
		//session_cache_expire(10);
		session_start();

		// Get all packages from the session
		$infoPackage = $_SESSION["packagesAva"];
		$packageid = $_SESSION["packages"];
		$customerid = $_SESSION["customerNumber"];


		$tc = $packages["TravelerCount"];
		$cc = $packages["CCName"];
		$cn = $packages["CCNumber"];
		$ce = $packages["CCExpiry"];
		$fc = $packages["ClassId"];
		$tt = $packages["TripTypeId"];

		$destination = $infoPackage[$packageid][0];
		$bookingdate = date();
		$bookingnum = 'SFO97';
		$itineraryno = '301';
		$tripstart = $infoPackage[$packageid][1];
		$tripend = $infoPackage[$packageid][2];
		$description = $infoPackage[$packageid][0];
		$baseprice = $infoPackage[$packageid][4];
		$agencycommission = $infoPackage[$packageid][5];
		$bookingid = '34';
		$feeid = 'NC';
		$productsupplierid = '11';
		$regionid = 'NA';


		$dbh = dbconnect();

		$sql = "INSERT INTO `bookings` (`BookingDate`, `BookingNo`,`TravelerCount`, `CustomerId`, `TripTypeId`, `PackageId`) VALUES (?, ?, ?, ?, ?, ?)";
		$sql2 = "INSERT INTO `bookingdetails` (`ItineraryNo`, `TripStart`, `TripEnd`, `Description`, `Destination`, `BasePrice`, `AgencyCommission`, `BookingId`, `RegionId`,`ClassId`, `FeeId`, `ProductSupplierId`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$sql3 = "INSERT INTO `creditcards` (`CCName`, `CCNumber`, `CCExpiry`, `CustomerId`) VALUES (?, ?, ?, ?)";

		$stmt = $dbh->prepare($sql);
		$stmt2 = $dbh->prepare($sql2);
		$stmt3 = $dbh->prepare($sql3);

		$stmt->bind_param("sssssi", $bookingdate, $bookingno, $tc, $customerid, $tt, $packageid);
		$stmt2->bind_param("ssssssssssss", $itineraryno, $tripstart, $tripend, $description, $destination, $baseprice, $agencycommission, $bookingid, $regionid, $fc, $feeid, $productsupplierid);
		$stmt3->bind_param("ssss", $cc, $cn, $ce, $customerid);

		$result = $stmt->execute();
		$result2 = $stmt2->execute();
		$result3 = $stmt3->execute();

		if ((!$result)
			or (!$result2)
			or (!$result3))
		{
			print(mysqli_stmt_error($stmt));
			return false;
		}
		$dbh->close();
		return true;
	}
	// End of Alex Procyk's PHP functions for Purchase page //
?>
