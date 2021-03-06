<!-- Author: Alex Procyk, Chris Potvin, Jonathan Pirca and Abel Rojas; Date: Nov 30th, 2018;
     Details: Full index page (home) including all of our elements and their respective php functions and css elements -->

<!DOCTYPE html>
<html>
  <head>
    <title>Travel Experts</title>

    <?php
		session_cache_expire(10);
		session_start();
		$_SESSION["mesageLogin"] = "";
      include "head-links.php";
     ?>

    <?php
      // Common files to use
    	include "include/variables.php";
    	include "include/functions.php";

      // Create connection to the DB
    	$conn = dbconnect();

      // Validate if the connection is done
      if (!$conn)
    	{
    		print("Connection error: " . mysqli_connect_errno() . " : " . mysqli_connect_error . "<br />");
    		exit();
    	}

      // Query to bring all the packages available
    	$sql = "Select * from packages where PkgStartDate <= NOW() and PkgEndDate >= NOW()";
    ?>

  </head>


  	<!-- HEADER -->

    <?php
      include "header.php";
    ?>

    <!-- Hero Element here -->
    <?php
      include "hero.php";
      ?>

		<!-- PAGE CONTENT HERE! -->
  <body>
		<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

		<?php
        // If there are results, start showing the packages
				if ($result = $conn->query($sql))
				{
					$n_rows = $result->num_rows;
					$count = 1;

					while ($row = $result->fetch_row())
					{

            // Print the beginning of the row
						if ($count%4 == 1)
						{
							echo("<div class='w3-row-padding w3-padding-16 w3-center' id='packages'>");
						}

						// Save values into array to be used in the sessin variable
						$infoPackage[$row[0]][0] = $row[1];
						$infoPackage[$row[0]][1] = $row[2];
						$infoPackage[$row[0]][2] = $row[3];
						$infoPackage[$row[0]][3] = $row[4];
						$infoPackage[$row[0]][4] = $row[5];
						$infoPackage[$row[0]][5] = $row[6];


						echo("<div class='w3-quarter'>");
							echo("<img src='images/" . $row[0] . ".jpg' alt='" . $row[1] . "' style='width:100%'>");
							echo("<h3>" . $row[1] ."</h3>");
							echo("<p>" . $row[4] . "</p>");

              // Format the date from the DB
							$dateA = new DateTime($row[2]);
							$dateB = new DateTime($row[3]);
							$dateFrom = $dateA->format('d') . "-" . $dateA->format('m') ."-" . $dateA->format('Y');
							$dateto = $dateB->format('d') . "-" . $dateB->format('m') ."-" . $dateB->format('Y');

              // Print date, Price, order button
							echo("<p class='datePkg'>" . $dateFrom . " to " . $dateto . "</p>");
							echo("<h2 class='price'>CAD $" . number_format($row[5],2,",","."). "</h2>");
							echo("<a class=\"w3-btn w3-black\" href='verifySession.php?pckId=".$row[0]."' ><strong>Order Now</strong></a>");
						echo("</div>");

            // After 4 element or end of packages print closing row
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

				$_SESSION["packagesAva"] = $infoPackage;
		?>

			<!-- Start of About Section // Chris Potvin -->
  <hr id="about">

      <div class="w3-container w3-padding-32 w3-center">
				<h3><u>About Travel Experts</u></h3>
				<div class="w3-padding-32">
					<h4><b>Sit back. Relax. We've got you covered.</b></h4>
					<h6><i>100% Satisfaction Guranteed.</i></h6>
					<p>Since 1985, we've been planning your ideal vacation with an assortment of exciting travel packages.
          Come experience your trip of a lifetime and let us, do all the work for you.</p>
				</div>
			</div>

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
                  <h4><b>Abel Rojas</b></h4>
                  <p>President of Travel Experts</p>
                  <p>Abelrojas@travelexperts.com</p>
              </div>
             </div>
          </div>
        </div>
      <!-- The End of Chris Potvin's contact cards  -->
			<hr>
</div>

  <!-- Footer -->
	<?php
		require("footer.php");
	?>
<!-- End page content -->

</body>
</html>
