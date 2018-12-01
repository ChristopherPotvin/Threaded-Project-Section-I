<!-- Author: Chris Potvin, Date: Nov 30th, 2018, Details: Register Succesful php page that bounces the customer from the customer registration page
to here, and gives them the ability to return to the main index page with the back button  -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <script src="main.js"></script>
</head>
<!-- Start of Page -->
<?php
    include "head-links.php"
    // Alex Abel's links page linking the nav bar buttons to their respective pages

    ?>

<?php
    include "header.php"
    // Alex Abel's links page linking the nav bar buttons to their respective pages
    ?>
<br><br>
<!-- Start of the page content -->
<body>
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <h1>Order confirmed. Thank your for booking with us!</h1>
    <a href="index.php"><img src="images/button.png";></a>
    
</body>
<!-- End of the page content -->

<br><br><br><br><br><br><br><br>


<?php
    include "footer.php"
    //Alex Procyk collabed with Chris Potvin on the footer along with Jonathan Pirca.
    ?>

<!-- End of Page -->
</html>
