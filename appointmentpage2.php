<?php  session_start();?>
<!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>

		<meta charset="utf-8">
		<title> Appointment Form</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script src="index.js" ></script>
		<script src="gen_validatorv4.js" > </script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
		<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>
		<script type="text/javascript" src="jquery-ui-sliderAccess.js"></script>
		<link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />
		<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />


	</head>
	<body>
		<div id="page">
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
			<div style = "width:100%;">
				
		
				<div id="content" >
					<div id="content-inner">
					
						<main id="contentBar">
							<?php 
								
								$appDate = $_SESSION['genAppointmentDate'];
								$appTime = $_SESSION['genAppointmentTime'];
								$appDoc = $_SESSION['appDoc'];
								if ($_SESSION['log']==1) {
									$appType = $_SESSION['appType'];
									$username = $_SESSION['appUsername'];
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
												$zip = $record['zipcode'];
												$pr = $record['id'];
											}
										}
										//INCLUDE THE WHOLE PAGE OVER HERE PG3
										}else {
											die("insert failed ". mysqli_error($connection));
										}
									 } catch (Exception $e){
										ECHO ("error:" . $e->getMessage()); // error handling 
									 } //end try catch
									 $connection->close();
								}
							?>
							<form class="app2Form" method="POST" action="appointmentPg3.php" id="app2Form">
							
								<div class="article">
									<div class = "visitInfo">
										
										<h2> Appointment Time <?php echo $appDate; ?> at <?php echo $appTime; ?> with Dr.<?php echo $appDoc; ?></h2>
										
										<label> Reason for visit <span>*</span></label><br>
										<textarea cols="60" rows="4" id="reasonForVisit" name="visitPatientReason" ></textarea>
										 <div id='app2Form_visitPatientReason_errorloc' class="error_strings" ></div>
										
										
										<div class = "">
											<label >
												Has the patient visited KC Clinic before?
												<span class="required-input">*</span>
											</label>
											<ul class="inline-radio-button">
												<li><label class="radio-label"><input type="radio" value="yes" name="visitNewpatient" id="visitYes" /> No</label></li>
												<li><label class="radio-label"><input type="radio" value="no" name="visitNewpatient" id="visitNo" /> Yes</label></li>
												<div id='app2Form_visitNewpatient_errorloc' class="error_strings" ></div>
											</ul>
											<label >
												Does the patient have a primary care doctor?
												<span class="required-input">*</span>
											</label>
											<ul class="inline-radio-button">
												<li><label class="radio-label"><input type="radio" value="yes" name="hasPhysian" id="visitPrDocYes" /> No</label></li>
												<li><label class="radio-label"><input type="radio" value="no" name="hasPhysian" id="visitPrDocNo" /> Yes</label></li>
												<div id='app2Form_hasPhysian_errorloc' class="error_strings"></div>
											</ul>
										</div>
									</div>
													
									<div class = "patientInfo">
										<label> Email*</label>
										<input id="emailAddress" type="email" name="visitEmail" value="<?php if ($_SESSION['log']==1){echo $username;}?>"  class = "inputText"  style = "width: 98%;">
										<div id='app2Form_visitEmail_errorloc' class="error_strings" ></div>

										<div class = "patientFullName"> 
											<div class = "patientFirstName">
												<label> Patient's First Name*</label>
												<input type = "text" class="inputText"  name ="patientFirstName" value="<?php if ($_SESSION['log']==1) {echo $fname;}?>"   id="patientFirstName"  style = "width: 60%;" >
												<div id='app2Form_patientFirstName_errorloc' class="error_strings" ></div></div>
											</div>
											
											<div class = "patientLastName" >
												<label style = "margin-left:380px; width:100%;"> Patient's Last Name*</label>
												
												<input type = "text" class="inputText" name ="patientLastName" value="<?php if ($_SESSION['log']==1){echo $lname;}?>"  id="patientLastName" style = "margin-left:380px; width: 100%;">
												<div style="margin-left:380px; width: 100%;"><div id='app2Form_patientLastName_errorloc' class="error_strings" ></div></div>
											</div>
										</div>
										
										<div class="formDate_of_birth ">
											<label for="birthday-month">Date of Birth <span class="required-input">*</span></label>
											<div class="dateSelect">
												<input type ="text" class="inputText" id = "pdob" value="<?php if ($_SESSION['log']==1) {echo $dob;}?>" name = "pdob" placeholder="mm-dd-yyyy"/>
												<div id='app2Form_pdob_errorloc' class="error_strings" ></div>
												
											</div>
										</div>
										<div class="formPhoneNumber ">
										  <label  style = "margin-left:40px; width: 100%;" >Phone Number*</label>
										  <input id="phoneNumber" class="inputText" placeholder="Best number to contact you" type="text" value="<?php if(isset($_POST["appLogBtn"])) {echo $phone;}?>" name="patientPhoneNumber"  style = "margin-left:40px; width: 90%;" >
										  <div id='app2Form_patientPhoneNumber_errorloc' class="error_strings" ></div>
										</div>
										<div class="formPatientGender ">
											<label >Gender*</label>
											<select name="visitGender" class="inputText" id="visitGender"> 
												<option value="0" <?php if ($_SESSION['log']==0) {echo 'selected="selected"';} ?>>--Select--</option>
												<option value="male" <?php if ($_SESSION['log']==1){if($gend=="male"){ echo 'selected="selected"'; }}?> > Male</option>
												<option value="female" <?php if ($_SESSION['log']==1){if($gend=="female") {echo 'selected="selected"';}}?> >Female</option>	
											</select>
												<div id='app2Form_visitGender_errorloc' class="error_strings" ></div>
										  
										</div>
										<div class = "zipCode">
											<label> Zip Code*</label>
											<input type = "text" name = "patientZipCode" class="inputText" id="patientZipCode"   value="<?php if ($_SESSION['log']==1) {echo $zip;}?>">
											<div id='app2Form_patientZipCode_errorloc' class="error_strings" ></div>
										</div>
										<div class = "emergancyContact">
											<label>Contact Name (if different from patient)</label>
											 <input id="erContactName" placeholder="Parent, Guardian or Caregiver" type="text" class="inputText" name="parentContactName" style = "width: 100%; height:30px;">
										</div>
										<div class="formFieldTermsConditionsCheckbox">
											<h4>Terms and Conditions</h4>
											<ul>
												<li class=""><label>
													<input name="terms_911" type="hidden" value="0"><input type="checkbox" value="1" name="agreeTerms" id="visit_terms_911">
														I have read the when to call 911
														guide and understand that KC Clinic is not to be used for life-threatening, debilitating, or emergent medical conditions. 
														I have determined my condition is not life-threatening and I can wait until I arrive for evaluation and treatment*.
													</label>
												</li>

												<li class=""><label>
													<input name="custom_terms" type="hidden" value="0"><input type="checkbox" value="1" name="agreeTerms" id="visit_custom_terms">
													I have read and agree to the KC Clinic HealthCare Terms and Conditions.*</label>
													<div id='app2Form_agreeTerms_errorloc' class="error_strings"  ></div>
												</li>
											</ul>
										</div>
									<!--patientInfo div ends -->	
									</div>
									<div class = "submitDiv">
										<button type="submit" name="commit" value="true" class="continueButton" id="continueConfirmation"  style="float:right;" onclick = "JavaScript:return validation();" >Continue to Confirmation</button>
										<a href="appointment.php" ><input type="button" name="return" value="Back to Appointments" class="backButton" id="backAppointmentBtn" /></a>
									</div>
									<div class="clr"></div>								
								</div>
								<p><input type ="hidden"  value="1" name='insert'/> </p>
								
							</form>
							
						</main>
						
						
						
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
					<script>
			$('#pDob').datepicker({
				dateFormat: "mm-dd-yy",
				minDate: new Date(1950, 11, 20, 8, 30),
				maxDate: new Date(2016, 11, 31, 17, 30)
			});
			
			</script>	
	</body>
</html>