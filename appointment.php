<!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
	<?php session_unset(); session_start();?>
		<meta charset="utf-8">
		<title> Appointments</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/index.css" rel="stylesheet" type="text/css">
		<script src="index.js" ></script>
		<script src="http://www.w3schools.com/lib/w3data.js"></script>
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
				
		
				
				<div id="contentApp">
					<div id="content-innerApp">
					
						<main id="contentBarApp">
							<div class="articleApp">

								<div class="descApp">
										<h1> Welcome to Kansas City CLINIC</h1>
										
									<div id="errormsg" style="color:red; width:500px;"></div>	
									<div id="app2Form_visitPatientReason_errorloc"  class="error_strings" style="color:red; width:500px;"></div>	
									<form class="app1Form"  name="myform" method="POST" action="	" id="app1Form">
										<div class="contBlock">
											<div class="appDesc">
												<div > <span class="appTitle"> A Weekday General Office Visit</span></div>
												
											</div>
											<div class="inner-Block">
												<div class="icon">
												<img src="images/genAppIcon.png"/>
												</div>
												<div class="aDesc gen">
													<p>
														Please arrive 10 minutes early for first visit paperwork. 
														We have a 24 hour cancellation/ rescheduling policy. 
														$35 will be charged for missed or late-cancelled appointments. 
														Registration or late-cancellation fees are NOT processed until visit day.
													</p>
												</div>
											
												<div class = "appDate">
													<input type ="text" class="inputText" id = "genAppointmentDate" name = "genAppointmentDate"  placeholder="mm-dd-yyyy"/>
												</div>
													<div class = "apptime">
													<input type = "text" class="inputTime" id = "genAppointmentTime" name="genAppointmentTime" placeholder="hh-mm"/>
													<p><input type ="hidden"  value="general" name='general'/> </p>
												</div>
												<div class = "aBtn">
													<select id="docTypo" class="inputTime" name="appDoc">
														<option value="0">--Doctor--</option>
														<option value="Block">Dr.Block </option>
														<option value="Bach">Dr.Bach </option>
														<option value="Bacharier">Dr.Bacharier </option>
														<option value="Baker">Dr.Baker </option>
														<option value="Balfe">Dr.Balfe </option>
														<option value="Balsara">Dr.Balsara </option>
														<option value="Baltagi">Dr.Baltagi MD</option>
													</select>
													<input type="submit"   class="bookBtn" id="genGoBtn" name ="submit"  value = "Book Now" style="margin-left:25px;" />
													
												</div>
													
											</div>
										</div>
									
									
									
										<hr class="breakLine"/>
										<div class="contBlock">
											<div class="appDesc">
												<div > <span class="appTitle"> Women's Health Services</span></div>
												
											</div>
											
											<div class="inner-Block">
												<div class="icon">
												<img src="images/wIcon1.png"/>
												</div>
												<div class="aDesc gen">
													<p>
														Women’s health care is provided by a board-certified OB/GYN physician and two board-certified Nurse Practitioners. 
														Services include comprehensive well woman’s care and preventative services, as well as problem visits.
													</p>
												</div>
											
													<div class = "appDate">
														<input type ="text" class="inputText" id = "womenAppointmentDate" name = "womenAppointmentDate" placeholder="mm-dd-yyyy"/>
													</div>
													<div class = "apptime">
														<input type = "text" class="inputTime" id = "womenAppointmentTime" name="womenAppointmentTime" placeholder="hh-mm"/>
														
													</div>
													<div class = "aBtn">
														<select id="wdocTypo" class="inputTime" name="wappDoc">
															<option value="0">--Doctor--</option>
															<option value="Block">Dr.Block </option>
															<option value="Bach">Dr.Bach </option>
															<option value="Bacharier">Dr.Bacharier </option>
															<option value="Baker">Dr.Baker </option>
															<option value="Balfe">Dr.Balfe </option>
															<option value="Balsara">Dr.Balsara </option>
															<option value="Baltagi">Dr.Baltagi MD</option>
														</select>
														<input type="submit"  class="bookBtn" id="wGoBtn" name ="wsubmit"  value = "Book Now" style="margin-left:25px;"onClick="womenValidation();"/>
														<div id="errormsg" style="color:red; width:500px;"></div>	
														<p><input type ="hidden"  value="women" name='women'/> </p>
													</div>
											</div>
										</div>
									
										<hr class="breakLine"/>
										<div class="contBlock">
											<div class="appDesc">
												<div > <span class="appTitle"> eClinic Online Visit</span></div>
												
											</div>
											
											<div class="inner-Block">
												<div class="icon">
												<img src="images/icon2.png"/>
												</div>
												<div class="aDesc gen">
													<p>
														Visit with our physicians online via webcam. 
													No need to download any software,just login with the URL you receive the day of your visit and turn on your computer camera! 
													Only $10 per visit, Wednesdays only. *Must be MO/KS resident*
													</p>
												</div>
											
													<div class = "appDate">
														<input type ="text" class="inputText" id = "eAppointmentDate" name = "eAppointmentDate" placeholder="mm-dd-yyyy"/>
													</div>
													<div class = "apptime">
														<input type = "text"  class="inputTime"id = "eAppointmentTime" name="eAppointmentTime" placeholder="hh-mm"/>
														
													</div>
													<div class = "aBtn">
														<select id="edocTypo" class="inputTime" name="EappDoc">
															<option value="0">--Doctor--</option>
															<option value="Block">Dr.Block </option>
															<option value="Bach">Dr.Bach </option>
															<option value="Bacharier">Dr.Bacharier </option>
															<option value="Baker">Dr.Baker </option>
															<option value="Balfe">Dr.Balfe </option>
															<option value="Balsara">Dr.Balsara </option>
															<option value="Baltagi">Dr.Baltagi MD</option>
														</select>
														<input type="submit"  class="bookBtn" id="eGoBtn" name ="Esubmit"  value = "Book Now" style="margin-left:25px;" onClick="eValidation();"/>
														<div id="errormsg" style="color:red; width:500px;"></div>	
														<p><input type ="hidden"  value="online" name='online'/> </p>
													</div>
											
											</div>
										</div>
									</form>
										<?php
										if(isset($_POST["submit"]))
										{
											$_SESSION['genAppointmentDate']=$_POST['genAppointmentDate'];
											$_SESSION['genAppointmentTime']=$_POST['genAppointmentTime'];
											$_SESSION['appDoc']=$_POST['appDoc'];
											$_SESSION['appType']=$_POST['general'];
											include 'appointmentTimingCode.php';
										} else if(isset($_POST["wsubmit"])) {
											$_SESSION['genAppointmentDate']=$_POST['womenAppointmentDate'];
											$_SESSION['genAppointmentTime']=$_POST['womenAppointmentTime'];
											$_SESSION['appDoc']=$_POST['wappDoc'];
											$_SESSION['appType']=$_POST['women'];
											include 'appointmentTimingCode.php';
										}else if(isset($_POST["Esubmit"])) {
											$_SESSION['genAppointmentDate']=$_POST['eAppointmentDate'];
											$_SESSION['genAppointmentTime']=$_POST['eAppointmentTime'];
											$_SESSION['appDoc']=$_POST['EappDoc'];
											$_SESSION['appType']=$_POST['online'];
											include 'appointmentTimingCode.php';
										}
										?>
								</div>
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

			<script>
			$('.inputText').datepicker({
				dateFormat: "mm-dd-yy",
				minDate: new Date(2016, 11, 20, 8, 30),
				maxDate: new Date(2017, 11, 31, 17, 30)
			});
			$(".inputTime").timepicker({
				controlType: 'select',
				oneLine: true,
				timeFormat: 'hh:mm tt',
				hourMin: 8,
				hourMax: 16
			});
			</script>	
	</body>
</html>