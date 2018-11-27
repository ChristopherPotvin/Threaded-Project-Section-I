<!DOCTYPE html>
<html>
  <head>
    <title>Travel Experts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
	
	footer {font-family:Impact; background-color: silver;}	
		
	h1 {color: white;}
		
	h4 {font-family: Arial; font-style: italic;}
		
	h6 {font-family: Arial; color: #8B0000;}	
	
    </style>
  </head>

  <header>
      <script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
    </script>

    <!-- Sidebar (hidden by default) -->
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left"
    style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()"
      class="w3-bar-item w3-button">Close Menu</a>
      <a href="index.php#packages" onclick="w3_close()" class="w3-bar-item w3-button">Travel packages</a>
      <a href="registration.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
      <a href="index.php#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
    </nav>

    <!-- Top menu -->
    <div class="w3-top">
      <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
        <a href="contact.php"><div class="w3-right w3-padding-16">Contact us</div></a>
        <div class="w3-center w3-padding-16"><strong>Travel Experts</strong></div>
      </div>
    </div>
  </header>    
	<!-- !PAGE CONTENT HERE! -->
<body>
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
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
	<?php
		require("footer.php");
	?>

</body>
</html>