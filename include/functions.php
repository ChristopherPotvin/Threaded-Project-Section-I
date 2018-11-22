<?php
//All the functions we are going to include
function dbConnect()
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
		$cup = $customers["CustPassword"];

		$dbh = dbconnect();
		// $dbh = mysqli_connect("localhost", "root", "", "travelexperts");

		$sql = "INSERT INTO `customers` (`CustomerId`, `CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`, `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`, `CustUserId`, `CustPassword`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
	// End of Chris Potvin's php code for customer registration form //
?>
