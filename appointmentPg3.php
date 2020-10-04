<?php  session_start();
$appDate = $_SESSION['genAppointmentDate'];
$appTime = $_SESSION['genAppointmentTime'];
$appDoc = $_SESSION['appDoc'];
$appType = $_SESSION['appType'];
?>
<!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<meta charset="utf-8">
		<title> Appointment Confirmation</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script src="map.js"> </script> 

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
								if (isset($_POST['insert']) and $_POST['insert']==1) {
									// make sure that the insert code doesn't run until form2 is submitted .
									
									
									
									
									
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "clinic_db";
									
									
									// variables from the appointment form 
									$patientFirstName = $_POST["patientFirstName"];
									$patientLastName = $_POST["patientLastName"];
									$dob= $_POST["pdob"];
									$gender = $_POST["visitGender"];
									$reason = $_POST["visitPatientReason"];
									$phoneNumber = $_POST["patientPhoneNumber"];
									$zipcode = $_POST["patientZipCode"];
									$email = $_POST["visitEmail"];
									
									// built select query 					
									$sql = "INSERT INTO appointmenttable (appointment_type, doctor, appointment_date, appointment_time, patient_first_name, patient_last_name, date_of_birth, gender, reason, phone_number, zipcode, patient_email) VALUES ('$appType', '$appDoc', '$appDate', '$appTime', '$patientFirstName', '$patientLastName', '$dob', '$gender', '$reason', '$phoneNumber', '$zipcode', '$email');";
	
									
									 // CONNECT TO MYSQL
									 
									 // CREAT A CONNECTION 
									 $connection = new mysqli($servername , $username , $password , $dbname );
									 // check connection 
									 if ($connection->connect_error){
										die("connection failed ". $connection-> connect_error); // if conncetion failed 
										
									 }// end if 
									 
									 try {
										if ($connection->query($sql)) {
										// send the sql query 
										//INCLUDE THE WHOLE PAGE OVER HERE PG3
										}else {
											die("insert failed ". mysqli_error($connection));
										}
									 } catch (Exception $e){
									 ECHO ("error:" . $e->getMessage()); // error handling 
									 } //end try catch
									 $connection->close();
									 unset($_POST['insert']);
								}	 				
							?>
							<?php
									// this script emails the user with the provided function below
									require_once 'mailer.php';

									$mail->addAddress($email, $patientLastName);     // Add a recipient
									$mail->Subject = 'Appointment Confirmation'; 
									$mail->Body    = "'<h2>Dear Patient,</h2><p>Your Appointment with Drz $appDoc on $appDate at $appTime has been booked </p><p>Thank you for booking an appointment with us </p> ";
									$mail->AltBody = 'Dear Patient, Your Appointment is Confirmed';

									if ($mail->send()) {}
												
							?>
							<div class="article">
								<div class = "containerpg3">
									<div class = "successConfirmation">
									
										<?php echo "<p><strong>Congratulation ! <br>Your information has been saved and sent to KC Clinic Health Center</strong>.
											A confirmation e-mail for this visit has been sent to <b>" .$email."</b>
											</p>";
											?>
										<!--<p><strong>Congratulation Mohammed Abdulla ! <br>Your information has been saved and sent to XXX Health Center Hospital</strong>.
											A confirmation e-mail for this visit has been sent to your email address.
										</p> -->
										<!-- successConfirmation div ends-->
									</div>
								</div>
								<div class="detailsBlock">
									<div class = "visitDetails">
										<ul class = "visitUL">
											<li><strong>When</strong> 
												<div class ="whenDetail">
													<?php echo "<label>".$appDate. " 	at ".$appTime . "</label>" ; ?>
						
												</div>
											</li>
											<h5></h5>
											<li>
												<div id="googleMap" style="width:200px;height:180px;"></div>
											</li>
											<li>
												<strong>Where</strong> 
												<div class="whereDetail">
													<label> UCM health Center <br>688 Summit Ward<br> Lee Summit, MO 64065</label>
												</div>
											</li>
											<h5></h5>
											<li class="phone">
												<h5></h5>
												<strong>Facilty phone Number</strong> 
												<div class ="whenDetail">
													<?php echo "<label>".$phoneNumber."</label>" ; ?>
												</div>
											</li>
										</ul>
									</div>
									<div class = "needtoknow">
										<div class = "visitReqInfo"> 
												<strong>When you arrive at KC Clinic</strong>
												<p>Please bring a valid photo ID. In addition, 
													please bring a list of your current medications and dosages including prescriptions, 
													over the counter, and herbal and home remedies.</p>

												<a class="addtoCalendarButton" href="index.html">I'm Done</a>

												<a class="printButton" href="javascript:window.print();">Print this page</a>
										</div>
										<div class="impInfo">
											<p>
											<strong class="importantNotice">Important Notice</strong>
											If you have a medical emergency, call 911 or go to the nearest emergency room immediately.
											You should only use KC Clinic service if you are certain you can safely wait at home with no risk to your health.
											For your safety, you will be asked to verify your information at the facility prior to admittance.
											</p>

											<p>
											<strong class="important">Cancellation</strong>
											To cancel your KC Clinic visit, please refer to your confirmation email and follow the cancellation instructions.
											</p>

										</div>	
									</div>
								
								</div>
								<!-- article div ends-->
								<div class="clr"></div>								
							</div>
							
						</main>
						<?php  session_unset();?>
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
	</body>
</html>