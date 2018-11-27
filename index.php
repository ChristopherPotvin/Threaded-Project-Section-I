<!DOCTYPE html>
<html>
  <head>
    <title>Travel Experts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="styles/style.css" />
	
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
      <a href="Registration.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
      <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
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

<?php 
	include "include/variables.php";
	include "include/functions.php";
	
	
	$conn = dbConnectJon();
	
	if (!$conn)
	{
		print("Connection error: " . mysqli_connect_errno() . " : " . mysqli_connect_error . "<br />");
		exit();
	}
	
	$sql = "Select * from packages where PkgStartDate <= NOW() and PkgEndDate >= NOW()";
?>
  
		<!-- !PAGE CONTENT HERE! -->
  <body>
		<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
		
		<?php
				if ($result = $conn->query($sql))
				{
					$n_rows = $result->num_rows;
					$count = 1;
					
					while ($row = $result->fetch_row()) 
					{
						
						if ($count%4 == 1)
						{
							echo("<div class='w3-row-padding w3-padding-16 w3-center' id='food'>");
						}
						
						echo("<div class='w3-quarter'>");
							echo("<img src='images/" . $row[0] . ".jpg' alt='" . $row[1] . "' style='width:100%'>");
							echo("<h3>" . $row[1] ."</h3>");
							echo("<p>" . $row[4] . "</p>");
							
							$dateA = new DateTime($row[2]);
							$dateB = new DateTime($row[3]);
							$dateFrom = $dateA->format('d') . "-" . $dateA->format('m') ."-" . $dateA->format('Y');
							$dateto = $dateB->format('d') . "-" . $dateB->format('m') ."-" . $dateB->format('Y');
							
							echo("<p class='datePkg'>" . $dateFrom . " to " . $dateto . "</p>");
							echo("<h2 class='price'>CAD $" . number_format($row[5],2,",","."). "</h2>");
							echo("<p><a href='verifySession.php' ><img src='images/order.jpg' /></a></p>");
						echo("</div>");
						
						if (($count%4 == 0) || ($count == $n_rows))
						{
							echo ("</div>");
						}
						$count++;
					}
					/* free result set */
					$result->close();
				}
				/* close connection */
				$conn->close();
		
		?>
    <!-- The start of Chris Potvin's Contact Card Section including css and html elements -->
    <div class="row">
        <div class="column">
          <div class="card">
              <img src="images/john.jpg" alt="Jonathan" style="width:100%">
              <div class="container">
                  <h4><b>Johnathan Pirca</b></h4>
                  <p>Senior Travel Agent</p>
                  <p>Johnathanpirca@travelexperts.com</p>

              </div>
            </div>
        </div>

        <div class="column">
          <div class="card">
              <img src="images/chris.jpg" alt="Chris" style="width:100%">
              <div class="container">
                  <h4><b>Christopher Potvin</b></h4>
                  <p>Travel Specialist</p>
                  <p>Chrispotvin@travelexperts.com</p>
              </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
              <img src="images/alex.jpg" alt="Alex" style="width:100%">
              <div class="container">
              <h4><b>Alex Procyk</b></h4>
              <p>Junior Travel Agent</p>
              <p>Alexprocyk@travelexperts.com</p>
              </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/abel.jpg" alt="Abel" style="width:100%">
            <div class="container">
                <h3><b>Abel Rojas</b></h3>
                <p>President of Travel Experts</p>
                <p>Abelrojas@travelexperts.com</p>
            </div>
           </div>
        </div>
      </div>
		<!-- The End of Chris Potvin's contact cards  -->
			<!-- Start of About Section // Chris Potvin -->
			<div class="w3-container w3-padding-32 w3-center">  
				<h3 style="underline">About Travel Experts</h3><br>
				<img src="images/blueocean.jpg" alt="ocean" class="w3-image" style="display:block;margin:auto" width="800" height="533">
				<div class="w3-padding-32">
					<h4><b>Sit back. Relax. We've got you covered.</b></h4>
					<h6><i>100% Satisfaction Guranteed.</i></h6>
					<p>Since 1985, we've been planning your ideal vacation with an assortment of exciting travel packages.
          Come experience your trip of a lifetime and let us, do all the work for you.</p>
				</div>
			</div>
			<hr>
  
  <!-- Footer -->
  <footer>
   <h1 style="background-color:DodgerBlue;" "text-align: left">The Travel Experts</h1>
   <h4 style="background-color:Violet;" "text-align: left">More than just a good time...</h4>
   <h6 style="text-align: left">Images by: Pexels.com<br>Icons by: Icons8.com</h6>
   <h6 style="text-align: left">&copy 2018 The Travel Experts <sup>TM</sup></h6>
  
   <div class="footer">
    <a href="https://www.facebook.com/" target="_blank">
    <img id="icon" src="/images/fb.png" style="float: center";></a>
    <a href="https://www.instagram.com/" target="_blank" >
    <img id="icon" src="/images/insta.png" style ="float: center";></a>
    <a href="https://twitter.com/" target="_blank">
    <img id="icon" src="/images/twitter.png" style="float: center";></a>
   </div>
  </footer>

<!-- End page content -->
</div>

</body>
</html>
