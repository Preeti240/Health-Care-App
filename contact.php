 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<meta charset="utf-8">
		<title>KC CLINIC: Contact US</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script src="map.js"> </script> 
		<script src="index.js" ></script>

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
								<div class = "banerDiv">
									<img src="images/contactBanner.jpg" class="contactBanner">
								</div>
								<div class="contactForm">
									<form class="contactUsForm" id="contactForm" method="POST" action="">
										<div class="sec1 sec">
											<div class="inputSec">
												<label class="cLabel">Name</label>
												<input type ="text" class="contactInput" id="contactName">
											</div>
											<div class="inputSec">
												<label class="cLabel">Email</label>
												<input type ="email" class="contactInput" id="contactEmail">
											</div>
											<div class="inputSec">
												<label class="cLabel">Phone</label>
												<input type ="text" class="contactInput" id="contactPhone">
											</div>
											<div class="inputSec">
												<label class="cLabel">ZipCode</label>
												<input type ="text" class="contactInput" id="contactZipcode">
											</div>
										</div>
										<div class="sec2 sec">
											<div class="inputSec">
												<label class="cLabel">Subject</label>
												<input type ="text" class="contactInput" id="contactSubject">
											</div>
											<div class="inputSec">
												<label class="cLabel">Questions and Comments</label>
												<textarea cols="35" rows="4" class="contactInput" name="contactMessage" ></textarea>
											</div>
											<div class="inputSec cbtn">
												<input type ="button" class="contBtn" id="contBtn" value="submit">
											</div>
										</div>
									</form>
									
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
	</body>
</html>