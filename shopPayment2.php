 <!DOCTYPE html>
<!-- Created by Group 12-->
 <html>
	<head>
		<meta charset="utf-8">
		<title>Pharmacy</title>
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
								  <a href="#">Location & Directions</a>
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
								<div class = "bannerShop">
									<div class="shopbanner1"><img src="images/giftBanner1.jpg" class="bannerb1 gift1"><img src="images/giftBanner2.jpg" class="bannerb2"></div>
								</div>
								
								<div class="marketGrid">
									<div >
										<ul class="breadcrumb">
										  <li><a href="index.html">Home</a></li>
										  <li><a href="pharmacy.php">Pharmacy Store</a></li>
										  <li><a href="pharmacy.php">Gift Shop</a></li>
										  <li>Shipping</li>
										</ul>
									
									</div>
									<div class="productGrid">
								<div class="shopShipForm">
									<p><div class="section-title"><h2>PAYMENT</div></h2></p>
									<form class="shopPaymentForm" id="shopForm" method="POST" action="">
										<div class="sec1 sec">
											<div class="inputSec">
												<label class="cLabel">Card</label>
												<input type ="text" class="shippingInput" id="contactName">
											</div>
											<div class="inputSec">
												<p class="cLabel">Expiration Date<input type="number" class="qauntity shippingInput scvv" id="qauntity4"/></p>
											</div>
											<div class="inputSec">
												<p class="cLabel">Billing Zip/Postal Code<input type="number" class="qauntity shippingInput scvv" id="qauntity4"/></p>
											</div>
											<div class="inputSec cbtn">
												<input type ="button" class="contBtn" id="contBtn" value="submit">
											</div>
											
											
										</div>
										
									</form>
									
								</div>
									</div>
									
									
									
								</div>
								<div class="contactForm">
									<form class="contactUsForm" id="contactForm" method="POST" action="">
										
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
					<p>&copy; Copyright <a href="#">KC CAFE</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>
	</body>
</html>