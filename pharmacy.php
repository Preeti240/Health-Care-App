 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
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
			<div style = "width:100%;">
				
				<div id="content mainshop"  >
					<div id="content-inner">
					
						<main id="contentBar">
							<div class="article">
								<div class = "banner">
									<img src="images/frontbanner.png" class="shopbaner">
								</div>
								<div class="catalog">
									<div class="vitaminsPromo departments">
												<ul>
													<li><a href="shopVitamins.php" class="catalogName"><b>Vitamins</b><br></a></li>
													<li>Multivitamins<br></li>
													<li>Probiotics<br></li>
													<li>Heart Health<br></li>
													<li>Bone & Joint<br></li>
													<li>Vitamin D</li>
												</ul>
									</div>
									<div class="giftPromo departments">
										<ul>
											<li class=""><a href="shopGifts.php" class="catalogName"><b>Gift Shop</b></a></li>
												
											<li>Gift Baskets </li>
											<li>Purses & Scarves </li>
											<li>Cards, Magazines & books </li>
											<li>bouquets </li>
										</ul>
									</div>
									<div class="healthPromo departments">
										<ul>
											<li class=""><a href="shopHealthCare.php" class="catalogName"><b>Health & Medicine</b></a></li>
											<li>Allergy </li>
											<li>Cough, Cold & Flu </li>
											<li>Digestive Health </li>
											<li>Pain & Fever </li>
											<li>Stop Smoking</li>
											<li> First Aid</li>
										</ul>
										</div>
										<div class="makeupPromo departments">
											<ul>
												<li class=""><a href="shopSkincare.php" class="catalogName"><b>Skin Care</b></a></li>
												<li>Face </li>
												<li>Body</li>
												<li>Hands & Feet </li>
												<li>Acne </li>
												<li>Anti-Aging </li>
											</ul>
										</div>
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