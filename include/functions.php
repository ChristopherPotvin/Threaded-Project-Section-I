<?php
//All the functions we are going to include
function dbConnect()
{
	global $servername, $username, $password, $dbname;
	
	return new mysqli($servername,$username,$password,$dbname);
}

?>