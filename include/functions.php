<?php
//All the functions we are going to include
function dbConnectJon()
{
	global $servername, $username, $password, $dbname;
	
	return new mysqli($servername,$username,$password,$dbname);
}

?>

<?php
// Start of Chris Potvin's PHP functions for Customer Registration page //

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
	
	
	function insertcustomer($customers)
	{
		$var = NULL;
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

		$sql = "INSERT INTO `customers` (`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`, `CustLogin`, `CustPassword`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
	// Start of Alex Procyk's PHP functions for Purchase page //

	function purchasepackage($packages)
	{	
		$var = NULL;
		$tc = $packages["TravelerCount"];
		$cc = $packages["CCName"];
		$cn = $packages["CCNumber"];
		$ce = $packages["CCExpiry"];
		$fc = $packages["ClassId"];
		$tt = $packages["TripTypeId"];
		
		$destination = 'Vancouver';
		$bookingdate = '2016-02-22';
		$bookingnum = 'SFO97';
		$customerid = '144';
		$itineraryno = '301';
		$tripstart = '2016-03-17 00:00:00';
		$tripend = '2016-04-02 00:00:00';
		$description = 'Vancouver/Sydney';
		$baseprice = '495.0000';
		$agencycommission = '98.6000';
		$bookingid = '34';
		$feeid = 'NC';
		$productsupplierid = '11';
		$regionid = 'NA';

		$dbh = dbconnect();
		// $dbh = mysqli_connect("localhost", "root", "", "travelexperts");

		$sql = "INSERT INTO `bookings` (`BookingDate`, `BookingNo`,`TravelerCount`, `CustomerId`, `TripTypeId`) VALUES (?, ?, ?, ?, ?)";
		$sql2 = "INSERT INTO `bookingdetails` (`ItineraryNo`, `TripStart`, `TripEnd`, `Description`, `Destination`, `BasePrice`, `AgencyCommission`, `BookingId`, `RegionId`,`ClassId`, `FeeId`, `ProductSupplierId`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$sql3 = "INSERT INTO `creditcards` (`CCName`, `CCNumber`, `CCExpiry`, `CustomerId`) VALUES (?, ?, ?, ?)";
		//$statement = mysqli_stmt_prepare($dbh, $sql);
		$stmt = $dbh->prepare($sql);
		$stmt2 = $dbh->prepare($sql2);
		$stmt3 = $dbh->prepare($sql3);

		$stmt->bind_param("sssss", $bookingdate, $bookingno, $tc, $customerid, $tt);
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
