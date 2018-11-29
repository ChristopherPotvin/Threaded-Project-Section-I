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
				<label>User ID:</label>
				<input class="w3-input w3-border" type="text" name="user" required>
			</div>
			<div class="w3-section">
				<label>Password</label>
				<input class="w3-input w3-border" type="password" name="pass" required>
			</div>
			<button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Login</button>
		</form>
    <div class="w3-section">
      <label>Not a registered customer yet?, click <a href="Registration.php">here!</a></label>
    </div>
		</div>

		<?php
			/*
			echo("<div class='w3-row-padding w3-padding-16 w3-center' id='food'>");
			echo("<div class='w3-quarter'>");
			echo("<img src='images/" . $row[0] . ".jpg' alt='" . $row[1] . "' style='width:100%'>");
			echo("<h3>" . $row[1] ."</h3>");
			echo("<p>" . $row[4] . "</p>");
			echo("<p class='datePkg'>" . $dateFrom . " to " . $dateto . "</p>");
			echo("<h2 class='price'>CAD $" . number_format($row[5],2,",","."). "</h2>");
			echo("<p><a href='verifySession.php' ><img src='images/order.jpg' /></a></p>");
			echo("</div>");
			echo ("</div>");
			*/
		?>

	<!-- Footer -->

</body>
	<?php
		require("footer.php");
	?>

</html>
