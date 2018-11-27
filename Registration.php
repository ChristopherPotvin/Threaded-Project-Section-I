<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
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

        <input type="submit" value="Register" onclick="return validate();"/>
        <input type="reset" onclick="return confirm('Are you sure you want to reset?');" />
    </fieldset>
</form>
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
</body>
</html>