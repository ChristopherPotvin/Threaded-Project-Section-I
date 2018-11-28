<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <?php
        include "head-links.php";
        ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="js/functions.js"></script>
    <head>
    <title>Travel Experts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
	
    </style>]
</head>
<body>
<?php
        include "header.php";
?>
        <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <form id="form" method="post" action="insertcustomer.php">
            <fieldset>
                <legend>Traveller Information:</legend>

                First Name:<br/><input type="text" name="CustFirstName" required="required"/><br/>

                Last Name:<br/><input type="text" name="CustLastName" required="required"/><br/>
        
                Address:<br/><input type="text" name="CustCity" required="required"/><br/>

                City:<br/><input type="text" name="CustAddress" required="required"/><br/>

                Postal Code:<br/><input type="text" name="CustPostal" id="postal" required="required"/><br/><br/>
                
                <label for='province'>Province:</label>

                <select id='province' name='CustProv'>

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

                Country:<br/><input type="text" name="CustCountry" required="required"/><br/>

                Email:<br/><input type="text" name="CustEmail" id="email" required="required"/><br/>

                Home Phone Number:<br/><input type="phone" name="CustHomePhone" required="required"/><br/>
    
                Business Phone Number:<br/><input type="phone" name="CustBusPhone"/><br/>

                Customer ID:<br/><input type="text" name="CustUserId" /><br/>
                Password:<br/><input type="text" name="CustPassword" /><br/><br>

                <label for='agentid'>Agent Id:</label>

                <select id='agentid' name='AgentId'>
                <!-- Options for selecting specific agents -->
                    <option value='0'>Select an Agent</option>
                    <option value='1'>Janet Delton</option>
                    <option value='2'>Judy Lisle</option>
                    <option value='3'>Dennis Reynolds</option>
                    <option value='4'>John Coville</option>
                    <option value='5'>Fred Smith</option>
                </select> 

        <input type="submit" value="Register" onclick="return validate();"/>
        <input type="reset" onclick="return confirm('Are you sure you want to reset?');" />
    </fieldset>
</form>
</div>
	<?php
		require("footer.php");
	?>
</body>
</html>