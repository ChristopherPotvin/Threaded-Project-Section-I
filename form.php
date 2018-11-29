<!DOCTYPE html>
<html>
<head>
<style>

    <title>Travel Experts</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="js/functions.js"></script>
	
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
	
	footer {font-family:Impact; background-color: silver;}	
		
	h1 {color: white;}
		
	h4 {font-family: Arial; font-style: italic;}
		
	h6 {font-family: Arial; color: #8B0000;}	
</style>
</head>

<header>
	<?php
		require("header.php");
	?>
</header>

<body>

    <form id="purchase" method="post" action="confirmpackage.php">
    <fieldset>
        <legend>Confirm Your Details to Purchase!</legend>
        
        Traveller Count:<br/><input type="text" id='TravCt' name='TravelerCount' required='required'/><br/>
		
        Credit Card Name:<br/><select id='CardName' name="CCName" required="required"/><br/>
				<option value=''>Select credit card mark</option>
				<option value='VS'>Visa</option>
				<option value='MC'>MasterCard</option>
				<option value='AM'>AMEX</option>
				<option value='DN'>Diners</option>
			</select>
		<br />
        Credit Card Number:<br/><input type="text" name="CCNumber" required="required"/><br/>
    
        Credit Card Expiry:<br/><input type="date" name="CCExpiry" required="required"/><br/>

		<label for 'ftype'>Trip Class:
		<select id='ftype' name='ClassId'>
			<option value=''>What class do you wish to select?</option>
			<option value='ECN'>Economy</option>
			<option value='BSN'>Business Class</option>
			<option value='FST'>First Class</option>
			<option value='INT'>Interior</option>
			<option value='NA'>Non-applicable</option>
			<option value='OCNV'>Ocean View</option>
			<option value='SNG'>Single</option>
			<option value='DBL'>Double</option>
			<option value='DLX'>Deluxe</option>
			<option value='NA'>Non-applicable</option>
		</select>
		
		<label for 'ttype'>Travel Type:
		<select id='ttype' name='TripTypeId'>
			<option value=''>For what reason are you travelling?</option>
			<option value='B'>Business</option>
			<option value='P'>Pleasure</option>
			<option value='G'>Group</option>
		</select>

		<input type="submit" value="Purchase"/>
        <input type="reset" onclick="return confirm('Are you sure you want to reset?');" />
		</fieldset>
	</form>
	
</body>
  <!-- Copy of global footer -->
	<?php
		require("footer.php");
	?>
<!-- End page content -->
</html>