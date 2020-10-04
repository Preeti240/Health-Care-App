 <!DOCTYPE html>
<!-- Created by Group 12-->
 <html>
	<head>
		<?php session_start();?>
		<meta charset="utf-8">
		<title> KC Clinic:Patient Information</title>
		<link href="index.css" rel="stylesheet" type="text/css" />

		<script src="index.js" ></script>
		<script src="gen_validatorv4.js" > </script>

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
				
		
				<div id="content" >
					<div id="content-inner">
					
						<main id="contentBar">
							<div class="article">
								<div class = "containerBillpg2">
									<div class = "billingCustomerInfo">
										<p class="billingHeading"> Patient Information</p>
										<div class = "billFormDiv">
										
											<form name ="billForm1" action ="billingpg3.php" method="POST" id="billForm1">
												<div class="amntDiv">
													<label class="formLabel">Amount</label>
													<div id='myform_amount_errorloc' class="error_strings"></div>
													<input type ="text" class="billInput" name ="amount" id="amount">
												</div>
												<div class="garuntatorDiv">
													<label class="formLabel">Gaurantor ID</label>
													<input type ="text" class="billInput" name ="gauantorID" id="gauantor">
													 <div id='app2Form_gauantorID_errorloc' class="error_strings" style="background-color: yellow; width:300px;"></div>
												</div>
												<div class="fNameDiv">
													<label class="formLabel">First Name</label>
													<input type ="text" class="billInput" name ="firstName" id="firstName">
													 <div id='app2Form_firstName_errorloc' class="error_strings" style="background-color: yellow; width:300px;"></div>
												</div>
												<div class="lastNameDiv">
													<label class="formLabel">Last Name</label>
													<input type ="text" class="billInput" name ="LastName" id="LastName">
													 <div id='app2Form_LastName_errorloc' class="error_strings" style="background-color: yellow; width:300px;"></div>
												</div>
												<div class="dobDiv">
													<label class="formLabel">Patient's Birth Date</label>
													<input type ="text" class="billInput" name ="dob" id="dob"/>
													 <div id='app2Form_dob_errorloc' class="error_strings" style="background-color: yellow; width:300px;"></div>
												</div>
												<div class="emailDiv">
													<label class="formLabel">Email Address</label>
													<input type ="email" class="billInput" name ="billEmail" id="billEmail" placeholder="exapmple@email.com"/>
													 <div id='app2Form_billEmail_errorloc' class="error_strings" style="background-color: yellow; width:300px;"></div>
												</div>
												<div class ="billForm1Btn">
													<a href="payBill.php"><input type ="button" name="back" value="Back"class="billFomr1Button"></a>
													<button type="submit" name="commit" value="true" class="billFomr1Button" id="billFomr1Continue" onclick = "JavaScript:return billValidation();" >Next</button>
												</div>
												<p><input type ="hidden"  value="5" name='pg2'/> </p>
											</form>
											<?php 
											/*if (isset($_POST['pg2'])) {
												session_unset(); 

														<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
		<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>
		<script type="text/javascript" src="jquery-ui-sliderAccess.js"></script>
		<link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />
		<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />
												
												$_SESSION['amount']=$_POST['amount'];
												$_SESSION['gauantorID']=$_POST['gauantorID'];
												$_SESSION['firstName']=$_POST['firstName'];
												$_SESSION['LastName']=$_POST['LastName'];
												$_SESSION['dob']=$_POST['dob'];
												$_SESSION['billEmail']=$_POST['billEmail'];
												
												
												$amount = $_SESSION['amount'];
												$gauantorID = $_SESSION['gauantorID'];
												$firstName = $_SESSION['firstName'];
												$LastName = $_SESSION['LastName'];
												$dob = $_SESSION['dob'];
												$billEmail = $_SESSION['billEmail'];
											}*/
										?>
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
			$('#dob').datepicker({
				dateFormat: "mm-dd-yy"
				
			});
			
			</script>
	</body>
</html>