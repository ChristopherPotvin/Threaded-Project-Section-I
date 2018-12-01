 <!-- Author: Chris Potvin; Date: Nov 30th, 2018; 
 Details: Customer Registration form that sends the customer data from the fields below in the mySQL data base 
 with the action of "insertcustomer.php" -->

<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <!-- Abel Rojas links for the page -->
    <?php
        include "head-links.php";
    ?>

<!-- CP JS validation for postal code and email -->
  <script src="js/functions.js"></script> 
</head>

<body>
    <!-- Abel Rojas header for the  -->
<?php
        include "header.php";
?>

<!-- Start of CP form with modifications from Abel Rojas and Jonathan Pirca -->
        <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <form id="form" method="post" action="insertcustomer.php">
            <fieldset>
                <legend>Traveller Information:</legend>

                First Name:<br/><input type="text" name="CustFirstName" required="required" size="100"/><br/>

                Last Name:<br/><input type="text" name="CustLastName" required="required" size="100"/><br/>

                Address:<br/><input type="text" name="CustCity" required="required" size="100"/><br/>

                City:<br/><input type="text" name="CustAddress" required="required" size="100"/><br/>

                Postal Code:<br/><input type="text" name="CustPostal" id="postal" required="required" size="100"/><br/><br/>

                Province:<br/><select id='province' name='CustProv'>

                    <option value=''>Select a Province</option>
                    <option value='ab'>AB</option>
                    <option value='bc'>BC</option>
                    <option value='sk'>SK</option>
                    <option value='mb'>MB</option>
                    <option value='on'>ON</option>
                    <option value='qc'>QC</option>
                    <option value='nb'>NB</option>
                    <option value='ns'>NS</option>
                    <option value='pe'>PE</option>
                    <option value='nl'>NL</option>
                    <option value='yt'>YT</option>
                    <option value='nt'>NT</option>
                    <option value='nu'>NU</option>

                </select>

                <br>

                Country:<br/><input type="text" name="CustCountry" required="required" size="100"/><br/>

                Email:<br/><input type="text" name="CustEmail" id="email" required="required" size="100"/><br/>

                Home Phone Number:<br/><input type="phone" name="CustHomePhone" required="required" size="100"/><br/>

                Business Phone Number:<br/><input type="phone" name="CustBusPhone" size="100"/><br/>

                Username:<br/><input type="text" name="CustUserId" size="100"/><br/>
                Password:<br/><input type="password" name="CustPassword" size="100"/><br/><br>

                Agent:<br/><select id='agentid' name='AgentId'>
                <!-- Options for selecting specific agents -->
                    <option value='0'>Select an Agent...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                    <option value='1'>Janet Delton</option>
                    <option value='2'>Judy Lisle</option>
                    <option value='3'>Dennis Reynolds</option>
                    <option value='4'>John Coville</option>
                    <option value='5'>Fred Smith</option>
                </select>

        <!-- Validation forms for if the customer is sure he wants to submit or reset -->
        <input type="submit" value="Register" onclick="return validate();"/> 
        <input type="reset" onclick="return confirm('Are you sure you want to reset?');" />
    </fieldset>
</form>
<!-- End of the form -->
</div>

</body>
<?php
		require("footer.php");
	?>
</html>
