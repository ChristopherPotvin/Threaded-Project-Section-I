<!DOCTYPE html>
<html>
  <head>
    <title>Travel Experts</title>
    <?php
      include "head-links.php";
     ?>

    <style>
	footer {font-family:Impact; background-color: silver;}

	h1 {color: white;}

	h4 {font-family: Arial; font-style: italic;}

	h6 {font-family: Arial; color: #8B0000;}

    </style>

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
  </head>


  	<!-- HEADER -->

    <?php
      include "header.php";
    ?>


		<!-- PAGE CONTENT HERE! -->
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
							echo("<p><a href='verifySession.php?pckId=".$row[0]."' ><img src='images/order.jpg' /></a></p>");
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
				<img src="images/blueocean.jpg" alt="ocean" class="w3-image" style="display:block;margin:auto" opacity="10%" width="800" height="533">
				<div class="w3-padding-32">
					<h4><b>Sit back. Relax. We've got you covered.</b></h4>
					<h6><i>100% Satisfaction Guranteed.</i></h6>
					<p>Since 1985, we've been planning your ideal vacation with an assortment of exciting travel packages.
          Come experience your trip of a lifetime and let us, do all the work for you.</p>
				</div>
			</div>
			<hr>

  <!-- Footer -->
	<?php
		require("footer.php");
	?>
<!-- End page content -->

</body>
</html>
