 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<?php  session_start();?>
		<meta charset="utf-8">
		<title> KC Clinic: Pay Bill</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<link href="http://localhost/index.css" rel="stylesheet" type="text/css">

		<script src="index.js" ></script>
<script src="http://www.w3schools.com/lib/w3data.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>		
<style>

</style>
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
			<div style = "width:100%;">
				
		
				<div id="content" >
					<div id="content-inner">
					
						<main id="contentBar">
							<div class="billDesc">
								<div class="billBanner">
								</div>
								<div class = "containerBill">
									<img src = "images/wel.jpg" class="billIcon1"/>
									<div class = "billingNeedtoKnowInfo">
										<div class ="billingOptionsPara pad">
											<div class = "para1">
												<h2 class ="paraHeader">Pay Your Bill Online </h2>
												<p> 
													You now have the option to pay your medical bills online via our secure portal. 
													We've partnered with U.S. Bank to make this option available to our patient-families.
												</p>
											</div>
											<div class="billingTypePara">
												<h3>Bill Options </h3>
												<p>
													Our customer service representatives are available to answer your questions about your hospital bill and payment-related concerns.
													You can call them at (312) 942-5693, Monday through Friday, 8 a.m. to 4:30 p.m., or email them at billing_info@ucmo.edu.
													
													<p>Once you find your medical group, click on the blue button to pay your bill. </p>
												</p>
											</div>
										<!--para1 ends -->
										</div>
											<hr class="hrBill"/>
										<div class="billingPara2 pad b2">
											<h2> KC CLINIC Health Center's Medical Bill</h2>
											<div class ="btnDiv"><input type ="button" id="medBillBtn" onclick="document.getElementById('id01').style.display='block'" class="billBtn" value="Pay KC CLINIC Health Center Medical Bill"></a></div>
											<p> Billing Questions for Hospital and Psychologist Services​: 877.924.8200</p>
											
										</div>
										<div id="id01" class="modal animate">
										  
										  <form class="modal-content " action="" method="POST">
											<div class="imgcontainer">
											  <span onclick="cancel()" class="close" title="Close Modal">&times;</span>
											  <h2>Login below to access to your info</h2>
											</div>

											<div class="containerlog">
											  <label><b>Username</b></label>
											  <input type="text" placeholder="Enter Username" name="t1" class="ipl" >
											 

											  <label><b>Password</b></label>
											  
											   <input type="password" name="t2" class="ipl" placeholder="Enter Password" >
											  <button type="submit" class="button" name="submit1" value="1">Login</button>
											</div>

											<div class="container" style="background-color:#f1f1f1">
											  
											</div>
											
										  </form>
										</div>
										<?php

											if(isset($_POST["submit1"]))
											{
											$_SESSION['Pusername']=$_POST['t1'];
											$pwd=md5($_POST["t2"]);
												$link=mysqli_connect("localhost","root","");
												mysqli_select_db($link,"clinic_db");
												$count=0;
												$res=mysqli_query($link,"select * from loginregister where username='$_SESSION[Pusername]' && password='$pwd'");
												$count=mysqli_num_rows($res);
												if($count>0)
												{
												?>
												<script type="text/javascript">
												window.location="billinvoice.php";
												</script>
												<?php
												}
												else
												{
												?>
												<script type="text/javascript">
												alert("Incorrect Username or Password. Please Try again!");
												</script>
												<?php
												}
											}
										?>
										<div class="billingPara3 pad b2">
											<h2> KC CLINIC Health Center Lab's Services Bill</h2>
											<label>KC CLINIC Health Center Group Phone Numbers </label>
											<ul>
												<li>Clinical Laboratory, Dentistry, Psychiatry (MDs):866.288.1080 </li>
												<li>Radiology and Anatomical Pathology: 866.288.1080 </li>
												<li>Ambulances and Pedratics : 888.152.2020 </li>
												<li>Transplant Surgery: 866.288.1080 </li>
											</ul>
										</div>
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
			<script>
				// Get the modal
				function cancel(){
					document.getElementById('id01').style.display='none';
				}
				function guest(){window.location.assign("billLogin.php");}
				var modal = document.getElementById('id01');

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			</script>
	</body>
</html>