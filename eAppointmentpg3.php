<?php session_start();
$appDate = $_SESSION['eAppointmentDate'];
$appTime = $_SESSION['eAppointmentTime'];
?>
<!DOCTYPE html>
<!-- Created by Group 12-->
 <html>
	<head>
		<meta charset="utf-8">
		<title> KC Clinic</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script src="map.js"> </script> 

	</head>
	<body>
		<div id="page">
			<header id="header">
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
				
			</header>
			<div style = "width:100%;">
				
		
				<div id="contentt" >
					<div id="content-inner">
					<?php
								if (isset($_POST['insert']) and $_POST['insert']==1) {
									// make sure that the insert code doesn't run until form2 is submitted .
									
									// IMPORTANT NOTE: YOU WILL NEED TO VALIDATE ALL THE INCOMING VALUES AT THE SERVER SIDE.
									// WE ARE NOE DOING THISN IN THE INTREST OF KEEPING THE CODE SHORT TO FIT INTO THE LAB.
									//ASSUMNPTION ARE THAT WE ENTER THE CORRECT VALUES , AND THE VALIDATIONS WILL BE DONE 
									
									
									
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "clinic_db";
									// built select query 
									
									
									
									$patientFirstName = $_POST["patientFirstName"];
									$patientLastName = $_POST["patientLastName"];
									$dobMonth = $_POST["birthdayMonth"];
									$dobDate = $_POST["birthDay"];
									$dobYear = $_POST["birthdayYear"];
									$dob= $dobMonth."-".$dobDate."-".$dobYear;
									$gender = $_POST["visitGender"];
									$reason = $_POST["visitPatientReason"];
									$phoneNumber = $_POST["patientPhoneNumber"];
									$zipcode = $_POST["patientZipCode"];
									$email = $_POST["visitEmail"];
														
									$sql = "INSERT INTO video_ppointment_table (Appointment_Date, appointment_time, patient_first_name, patient_last_name, date_of_birth, gender, reason, phone_number, zipcode, patient_email) VALUES ('$appDate', '$appTime', '$patientFirstName', '$patientLastName', '$dob', '$gender', '$reason', '$phoneNumber', '$zipcode', '$email');";

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
						<main id="contentBar">
							
							<div class="eConfirmation">
								<div class = "thankyouDiv">
									<h1> Thank You!</h1>
								</div>
								<div class="eDetailsDiv">
									<p><b> Dear <?php echo $patientFirstName; echo $patientLastName;?>, Your Appointment for video visit has been scheduled!</b></p>
									<p><b>Physian:</b>Dr.YYY</p>
									<p><b>Time:</b><?php echo $appDate;?> at<?php echo $appTime;?></p>
									<p><b>Appointment type:</b>Video Call</p>
									<p> We will email you an Confirmation email with the link and acess code for the video call for your online visit.
										Simply click on the link in the email and enter the acess code on the redirected page and then you will be connected with the 
										Our Physian at the time of the appointments. Please Note that if you want to cancel or reschedule your online Video Call, 
										let us know 24hours prior to your scheduled time</p>
									
								</div>
								<!-- article div ends-->
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
	</body>
</html>