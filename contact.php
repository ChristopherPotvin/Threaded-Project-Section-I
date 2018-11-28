<!DOCTYPE html>
<html>
  <head>
    <title>Travel Experts</title>
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
include_once("include/functions.php");
// Connect to database and store in handler
$dbh = dbconnect();

$sql = "SELECT * FROM `agencies`";

$result = $dbh->query($sql);

while ($row = $result->fetch_row())
{
  print("<div class=\"w3-container w3-card-2\" style=\"margin-bottom:20px;\">");
  print("<h2>Agency ".$row[0]."</h2>");
  print("<p style=\"text-indent: 4%;\">Address: ".$row[1].", ".$row[2].", ".$row[3].", ".$row[4].", ".$row[5]."</p>");
  print("<p style=\"text-indent: 4%;\">Telehpone: ".$row[6]."</p>");
  print("<p style=\"text-indent: 4%;\">Fax: ".$row[7]."</p>");

  print("<table class=\"w3-table w3-bordered w3-hoverable w3-card-4\">");
  print("<tr><th>Name</th><th>Phone</th><th>Email</th><th>Position</th></tr>");

  $sql_agents = "SELECT * FROM `agents` WHERE `AgencyId`=?";
  $stmt_agents = $dbh->prepare($sql_agents);
  $stmt_agents->bind_param("i", $row[0]);
  $stmt_agents->execute();
  $result_agents = mysqli_stmt_get_result($stmt_agents);
  while ($row_agents = $result_agents->fetch_row())
  {
    print("<tr><td>".$row_agents[1]." ".$row_agents[2]." ".$row_agents[3]."</td><td>".$row_agents[4]."</td><td>".$row_agents[5]."</td><td>".$row_agents[6]."</td></tr>");
  }

  print("</table>");
  print("</div>");

}

?>
</div>

<!-- Footer -->
<?php
  require("footer.php");
?>

<!-- End page content -->

</body>
</html>
