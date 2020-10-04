<?php session_start(); ?>
 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<meta charset="utf-8">
		<title>Shipping & PAYMENT</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script src="index.js" ></script>
		<script src="gen_validatorv4.js" > </script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
		<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />

	</head>
	<body >
		<div id="page" >
			<header id="header">
				<div id="header-left">	
					<div id="logo">
						<a href="index.html"><img src="KCClogo.png" alt="kc clinic"  /></a>
					<div id="topNav">
						<ul>
						<li><a href="aboutUs.html">About</a></li> 
						<li><a href="#">Help</a></li>
						</ul>
					</div>
					</div>
					
					
					<div class="clr"></div><!--FOR CSS TO CLEAR THE SIDES IN T HE PAGE -->
				</div>
			</header>
			<nav class="mainHeading" >
			
					<div class="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="docs.php">Doctors</a></li>
							 <li class="dropdown">
								<a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Pateint & Visitors</a>
								<div class="dropdown-content" id="myDropdown">
								  <a href="appointment.php">Appointments</a>
								  <a href="payBill.php">Pay Bill</a>
								  <a href="pharmacy.php">Pharmacy & Store</a>
								  
								</div>
							 </li>
							<li><a href="contact.php">Contact Us</a></li>
						
					</div>
					
				</nav>
			<div style = "width:80%; margin-left:10%;">
				<div id=""  >
					<div id="contentCon">
						<main id="cont" >
							<div class="cc">
								<div class="marketGrid">	
									<div >
										<ul class="breadcrumb">
										  <li><a href="index.html">Home</a></li>
										  <li><a href="pharmacy.php">Pharmacy Store</a></li>
										  <li><a href="shopSkincare.php">Skin Care</a></li>
										  <li>Customer details</li>
										</ul>
									</div>
									<?php
									if($_SESSION['log']!==0) {
									$username=$_SESSION['username'];
									} else {
									$username="";	
									echo "fail";
									}
									$servername = "localhost";
									$dbusername = "root";
									$password = "";
									$dbname = "clinic_db";
									$sql = "select * from users where email='$username';";
									$connection = new mysqli($servername , $dbusername , $password , $dbname );
									 // check connection 
									 if ($connection->connect_error){
										die("connection failed ". $connection-> connect_error); // if conncetion failed 
										
									 }// end if 
									 
									 try {
										if ($connection->query($sql)) {
											$count=0;
										// send the sql query 
										$myData = $connection->query($sql);
										$count=mysqli_num_rows($myData);
										if ($count>0) {
											while ($record = mysqli_fetch_array($myData)) {
												$fname = $record['firstname'];
												$lname = $record['lastname'];
												$phone = $record['phone'];
												$gend = $record['gender'];
												$dob = $record['dob'];
												$adress = $record['adress'];
												$city = $record['city'];
												$state = $record['state'];
												$zip = $record['zipcode'];
												$pr = $record['id'];
												$name = $fname." ".$lname;
												
											}
												echo $name;
											
										} 
										//INCLUDE THE WHOLE PAGE OVER HERE PG3
										}else {
											die("insert failed ". mysqli_error($connection));
										}
									 } catch (Exception $e){
									 ECHO ("error:" . $e->getMessage()); // error handling 
									 } //end try catch
									 $connection->close();
									
								?>
								
									<div class="itemGrids">
								<div class="shopShipForm">
									<p><div class="section-title"><h2>Ship To</div></h2></p>
									<form class="shopPaymentForm"  name="shopPaymentFormName" id="shopPaymentForm" method="POST" action="">
										<div class="sec1 sec">
											<div class="inputSec">
												<label class="cLabel">Name</label>
												<input type ="text" value="<?php if ($count>0) {echo $name;}?>"class="shippingInput" id="shoperName" name="name">
												 <div id='shopPaymentForm_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec">
												<label class="cLabel">Adress*</label>
												<input type ="text" value="<?php if ($count>0) {echo $adress;}?>"class="shippingInput" id="shoperAddress" name="adress">
												 <div id='adress_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec">
												<label class="cLabel">City</label>
												<input type ="text"	value="<?php if ($count>0) {echo $city;}?>"class="shippingInput" id="shoperCity" name="city">
												 <div id='city_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec">
												<label class="cLabel">State</label>
												<select id="state-dropdown" class="shippingInput" name="shoperState">4
													<option value="0" value="<?php if ($count>0) {echo 'selected="selected"';}?>"></option> <option value="AA">AA</option><option value="AE">AE</option><option value="AP">AP</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option>4
													<option value="American Samoa">American Samoa</option><option value="Arizona" <?php if($count>0){if($state=="Arizona"){ echo 'selected="selected"'; }}?>>Arizona</option><option value="Arkansas">Arkansas</option>
													<option value="California">California</option><option value="Colorado" <?php if($count>0){if($state=="Colorado"){ echo 'selected="selected"'; }}?>>Colorado</option><option value="Connecticut">Connecticut</option>
													<option value="Delaware">Delaware</option><option value="District of Columbia" <?php if($count>0){if($state=="District of Columbia"){ echo 'selected="selected"'; }}?>>District of Columbia</option>
													<option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam" <?php if($count>0){if($state=="Guam"){ echo 'selected="selected"'; }}?>>Guam</option>
													<option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois"<?php if($count>0){if($state=="Illinois"){ echo 'selected="selected"'; }}?> >Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option>
													<option value="Kansas" <?php if($count>0){if($state=="Kansas"){ echo 'selected="selected"'; }}?>>Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option>
													<option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option>
													<option value="Mississippi">Mississippi</option><option value="Missouri" <?php if($count>0){if($state=="Missouri"){ echo 'selected="selected"'; }}?>>Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option>
													<option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option>
													<option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option>
													<option value="North Dakota">North Dakota</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Ohio">Ohio</option>
													<option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option>
													<option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option>
													<option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option>
													<option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option>
													<option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option>
												</select> 
												 <div id='state_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec">
												<label class="cLabel">ZipCode</label>
												<input type ="text" value="<?php if ($count>0) {echo $zip;}?>"class="shippingInput" id="shzip" name="shoperZip">
												 <div id='zip_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec">
												<label class="cLabel">Phone Number</label>
												<input type ="text" value="<?php if ($count>0) {echo $phone;}?>"class="shippingInput" id="shphone" name="shoperPhone">
												 <div id='phone_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec">
												<label class="cLabel">Email</label>
												<input type ="email" value="<?php if ($count>0) {echo $username;}?>"class="shippingInput" id="shpemail" name="shoperEmail">
												 <div id='email_errorloc' class="error_strings" ></div>
											</div>
										</div>
								</div>
										 
								<div class="shopShipForm">
									<p><div class="section-title"><h2>PAYMENT</div></h2></p>
									
										<div class="sec1 sec">
											<div class="inputSec">
												<label class="cLabel">Card</label>
												<input type ="text" class="shippingInput"  name="cardNo"id="cardNo" style="width:380px;">
												 <div id='crd_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec">
												<p class="cLabel">Expiration Date<input type="text" class="qauntity shippingInput scvv" placeholder="mm/yy" name="exp"id="shexp"/></p>
												 <div id='exp_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec">
												<p class="cLabel">Billing Zip/Postal Code<input type="number"  max=9999 name="bilZip"value="<?php if ($count>0) {echo $zip;}?>" class="qauntity shippingInput scvv" id="billZip"/></p>
												 <div id='billZip_name_errorloc' class="error_strings" ></div>
											</div>
											<div class="inputSec cbtn">
												<input type ="Submit" name="orderSubmit"class="contBtn shpbtn" id="contBtn" value="Place Order">
											</div>
											
											
										</div>
										
									</form>
								</div>
									</div>
								<?php
								if (isset($_POST['orderSubmit'])) {
									$name = $_POST['name'];
									$adress = $_POST['adress'];
									$city = $_POST['city'];
									$shoperState = $_POST['shoperState'];
									$shoperZip = $_POST['shoperZip'];
									$shoperPhone = $_POST['shoperPhone'];
									$cardNo = $_POST['cardNo'];
									$exp = $_POST['exp'];
									$bilZip = $_POST['bilZip'];
									$email = $_POST['shoperEmail'];
									$id =  uniqid();
									
									$_SESSION['name'] = $_POST['name'];
									$_SESSION['adress'] = $_POST['adress'];
									$_SESSION['city'] = $_POST['city'];
									$_SESSION['shoperState'] = $_POST['shoperState'];
									$_SESSION['shoperZip'] = $_POST['shoperZip'];
									$_SESSION['cardNo'] = $_POST['cardNo'];
									$_SESSION['email'] = $_POST['email'];
									$_SESSION['id'] = $id;
									
									
									$sql = "INSERT INTO shop_payments (id, bill_amount, name, adress, city, state, zipcode, phone, card_no, exp, card_zip, bill_email)	VALUES ('$id', '$_SESSION[totals]', '$name', '$adress', '$city', '$shoperState', '$shoperZip', '$shoperPhone', '$cardNo', '$exp', '$bilZip', '$email');";
									$connection = new mysqli($servername , $dbusername , $password , $dbname );
									 // check connection 
									 if ($connection->connect_error){
										die("connection failed ". $connection-> connect_error); // if conncetion failed 
										
									 }// end if 
									 
									 try {
										if ($connection->query($sql)) {
											?>
											<script type="text/javascript">
											window.location="shopConfirmation.php";
											</script>
											<?php
										}else {
											die("insert failed ". mysqli_error($connection));
										?>
										<script type="text/javascript">
										alert("There was something wrong with the transaction.Please try again");
										</script>
										<?php
										}
									 } catch (Exception $e){
									 ECHO ("error:" . $e->getMessage()); // error handling 
									 } //end try catch
									 $connection->close();
								}
								?>					
									
								</div>
								
								<div class="clr"></div>								
							</div>
							
						</main>
						
						<nav id="sidebar">
							<div class="widget">
								
								
							</div>
						</nav>
						
						<div class="clr"></div>
					</div>
				</div>
				<br style="clear: left;" />
			</div>
		
			<div id="footerblurb">
				<div id="footerblurb-inner">
				</div>
			</div>
			<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright <a href="#">KC CLINIC</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>
			

</script>
	</body>
</html>