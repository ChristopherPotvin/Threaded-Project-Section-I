<!--
    Author: Abel Rojas;
    Date: Nov 28th, 2018;
    Details: Page that displays agencies and agents contact data;
-->

<!DOCTYPE html>
<html>
  <head>
    <title>Contact us</title>
    <!-- Links to stylesheets and frameworks -->
    <?php
      include "head-links.php";
     ?>
  </head>

<body>
  <!-- HEADER -->
  <?php
    include "header.php";
  ?>


<!-- !PAGE CONTENT! -->
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
      <?php
      // Call functions file
      include_once("include/functions.php");
      // Connect to database and store in handler
      $dbh = dbconnect();
      // Define sql statement
      $sql = "SELECT * FROM `agencies`";
      // Bring result of query into variable
      $result = $dbh->query($sql);

      // Capture each row of table `agencies`
      while ($row = $result->fetch_row())
      {

        // Create card for displaying agency information. One card per agency.
        print("<div class=\"w3-container w3-card-2\" style=\"margin-bottom:20px;\">");
        print("<h2>".$row[2]." Branch</h2>");
        print("<p style=\"text-indent: 4%;\">Address: ".$row[1].", ".$row[2].", ".$row[3].", ".$row[4].", ".$row[5]."</p>");
        print("<p style=\"text-indent: 4%;\">Telehpone: ".$row[6]."</p>");
        print("<p style=\"text-indent: 4%;\">Fax: ".$row[7]."</p>");
        // Create card with table for displaying agents from that agency
        print("<table class=\"w3-table w3-bordered w3-hoverable w3-card-4\">");
        print("<tr><th>Name</th><th>Phone</th><th>Email</th><th>Position</th></tr>");
        // Define sql statement for bringing agents from that agency
        $sql_agents = "SELECT * FROM `agents` WHERE `AgencyId`=?";
        $stmt_agents = $dbh->prepare($sql_agents);
        // Agents are brought depending on their Agency Id
        $stmt_agents->bind_param("i", $row[0]);
        $stmt_agents->execute();
        // Bring result of query into variable
        $result_agents = mysqli_stmt_get_result($stmt_agents);
        // Capture each applicable row of table `agents`
        while ($row_agents = $result_agents->fetch_row())
        {
          // Populate fields of agents display table
          print("<tr><td>".$row_agents[1]." ".$row_agents[2]." ".$row_agents[3]."</td><td>".$row_agents[4]."</td><td>".$row_agents[5]."</td><td>".$row_agents[6]."</td></tr>");
        }
        // Close table
        print("</table>");
        // Close agency card
        print("</div>");

      }

      ?>
    </div>

    <!-- FOOTER -->
    <?php
    require("footer.php");
    ?>

  </body>

</html>
