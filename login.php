<?php
/*
	Author: Jonathan Pirca
	Date: Nov 29th, 2018;
	Details: Form to request user id and password in order to purchase a package.
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Travel Experts</title>
	<?php
		include "head-links.php";
    ?>
  </head>

  <header>
	<?php
		include("header.php");
	?>
  </header>
	<!-- !PAGE CONTENT HERE! -->
<body>
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
	<br><br><br><br><br>
		<div class='w3-row-padding w3-padding-16 w3-center' id='food'>
		<form action="validateLogin.php" method="Post">
			<div class="w3-section">
				<label>Username:</label>
				<input class="w3-input w3-border" type="text" name="user" required>
			</div>
			<div class="w3-section">
				<label>Password:</label>
				<input class="w3-input w3-border" type="password" name="pass" required>
			</div>
			<button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Login</button>
		</form>
    <div class="w3-section">
      <p>Not a registered customer yet?, click <a href="Registration.php">here!</a></p>
    </div>
		</div>


	<!-- Footer -->

</body>
<br><br><br><br><br><br><br><br><br><br>
	<?php
		require("footer.php");
	?>

</html>
