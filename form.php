<?php
	//Author: Alex Procyk and Jonathan Pirca;
	//Date: Nov 30th, 2018;
	//Details: Form for purchase/confirmation of package for a registered and logged-in user
?>

<!DOCTYPE html>
<html>
<head>
	<!-- inclusion of title and style elements -->
    <title>Travel Experts</title>
	<?php
      include "head-links.php";
    ?>

</head>

<header>
	<!-- inclusion of header -->
	<?php
		include("header.php");
	?>
</header>

<body>
<!-- padding details-->
  <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <fieldset>
    <legend>Confirm Your Details to Purchase!</legend>
    <form id="purchase" method="post" action="confirmpackage.php">


		<!-- start of form area -->
		<!-- all selection and entry lines in the form included here -->
        Traveller Count:<br/><input type="text" id='TravCt' name='TravelerCount' required='required' size="100"/><br/>

        Credit Card Name:<br/><select id='CardName' name="CCName" required="required"/><br/>
				<option value=''>Select credit card mark</option>
				<option value='VS'>Visa</option>
				<option value='MC'>MasterCard</option>
				<option value='AM'>AMEX</option>
				<option value='DN'>Diners</option>
			</select>
		<br />
        Credit Card Number:<br/><input type="text" name="CCNumber" required="required" size="100"/><br/>

        Credit Card Expiry:<br/><input type="date" name="CCExpiry" required="required" /><br/>


		Trip Class:<br /><select id='ftype' name='ClassId'>
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
		</select><br/>


		Travel Type:<br /><select id='ttype' name='TripTypeId'>
			<option value=''>For what reason are you travelling?</option>
			<option value='B'>Business</option>
			<option value='L'>Leisure</option>
			<option value='G'>Group</option>
		</select>
        <!-- Validation selections for if the customer is sure he wants to finalize purchase, or reset -->
		<input type="submit" value="Purchase"/>
        <input type="reset" onclick="return confirm('Are you sure you want to reset?');" />
	  </form>
	  	<!-- end of form elements -->
	</fieldset>
 </div>
</body>

  <!-- Copy of global footer -->
	<?php
		require("footer.php");
	?>
<!-- End page content -->
</html>
