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
      <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button">Travel packages</a>
      <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
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
	
	
	$conn = dbConnect();
	
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
    <div class="row">
        <div class="column">
          <div class="card">
              <img src="john.jpg" alt="redpanda" style="width:100%">
              <div class="container">
                  <h4><b>Johnathan Pirca</b></h4>
                  <p>Senior Travel Agent</p>
                  <p>Johnathanpirca@travelexperts.com</p>

              </div>
            </div>
        </div>

        <div class="column">
          <div class="card">
              <img src="chris.jpg" alt="lion" style="width:100%">
              <div class="container">
                  <h4><b>Christopher Potvin</b></h4>
                  <p>Travel Specialist</p>
                  <p>Chrispotvin@travelexperts.com</p>
              </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
              <img src="alex.jpg" alt="gorilla" style="width:100%">
              <div class="container">
              <h4><b>Alex Procyk</b></h4>
              <p>Junior Travel Agent</p>
              <p>Alexprocyk@travelexperts.com</p>
              </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="abel.jpg" alt="wolf" style="width:100%">
            <div class="container">
                <h3><b>Abel Rojas</b></h3>
                <p>President of Travel Experts</p>
                <p>Abelrojas@travelexperts.com</p>
            </div>
           </div>
        </div>
      </div>
		
			<!-- About Section -->
			<div class="w3-container w3-padding-32 w3-center">  
				<h3>About Me, The Food Man</h3><br>
				<img src="/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
				<div class="w3-padding-32">
					<h4><b>I am Who I Am!</b></h4>
					<h6><i>With Passion For Real, Good Food</i></h6>
					<p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
				</div>
			</div>
			<hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

</body>
</html>
