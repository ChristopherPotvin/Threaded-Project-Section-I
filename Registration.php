<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="mainregistration.css" />
    <script src="registrationmain.js"></script>
</head>
    
    <form id="form" method="post" action="insertcustomer.php">
    <fieldset>
        <legend>Traveller Information:</legend>

        First Name:<br/><input type="text" name="CustFirstName" required="required"/><br/>

        Last Name:<br/><input type="text" name="CustLastName" required="required"/><br/>
        
        Address:<br/><input type="text" name="CustCity" required="required"/><br/>

        City:<br/><input type="text" name="CustAddress" required="required"/><br/>

        Postal Code:<br/><input type="text" name="CustPostal" id="postal" required="required"/><br/>

        Country:<br/><input type="text" name="CustCountry" required="required"/><br/>

        Email:<br/><input type="text" name="CustEmail" id="email" required="required"/><br/>

        Home Phone Number:<br/><input type="phone" name="CustHomePhone" required="required"/><br/>
    
        Business Phone Number:<br/><input type="phone" name="CustBusPhone"/><br/>

        Customer ID:<br/><input type="text" name="CustUserId" /><br/>
        Password:<br/><input type="text" name="CustPassword" /><br/>


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

        <label for='agentid'>Agent Id:</label>
        <select id='agentid' name='AgentId'>
            <option value='0'>Select an Agent Id</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
        </select> 

        <input type="submit" value="Register" onclick="return validate(form);"/>
        <input type="reset" onclick="return confirm('Are you sure you want to reset?');" />
    </fieldset>
</form>
</body>
</html>