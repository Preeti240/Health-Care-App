 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<?php session_start();?>
		<meta charset="utf-8">
		<title> Patient Payment Information</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script src="index.js"> </script> 
		<script src="gen_validatorv4.js" > </script>

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
							<div class="article">
								<div class = "containerBillpg2">
									<div class = "billingCustomerInfo b2">
										<p class="billingHeading"> Payment Information</p>
											<?php 
												$invoiceDate = $_SESSION['amount'];
												$account = $_SESSION['account'];
												$name = $_SESSION['name'];
												$amount = $_SESSION['amount'];
												$billEmail = $_SESSION['Pusername'];
											?>
										<div class = "billFormDiv">
											<form name ="billForm2" action ="billingpg4.php	" method="POST" id="billForm2">
												<div class="amntDiv">
													<label class="formLabel b2Label">Card Type</label>
													<label><input type="radio" value="Credit" name="paymentType" id="card" />Credit/Debit Card&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="radio" value="Debit" name="paymentType" id="acount" />Debit</label>
													<div id='app2Form_paymentType_errorloc' class="error_strings"></div>
													<img src="images/cardsimg.png" alt="visa" class="visaImg" />
													
												</div>
												<div class="amntDiv">
													<label class="formLabel b2Label">Cardholder Name </label>
													<input type ="text" class="billInput" name ="cardHolderName" id="cardHolderName">
													<div id='app2Form_cardHolderName_errorloc' class="error_strings"></div>
												</div>
												<div class="garuntatorDiv">
													<label class="formLabel b2Label">Card Number</label>
													<input type ="text" class="billInput" name ="cardNo" id="cardNo">
													<div id='app2Form_cardNo_errorloc' class="error_strings"></div>
												</div>
												<div class="expCvv" style="width:100%; margin-bottom:10px;">
													<div class="expDiv" style="width:50%;">
														<label class="formLabel b2Label">Exp Date</label>
														<input type ="text" class="billInput exp" name ="expDate" id="expDate">
														<div id='app2Form_expDate_errorloc' class="error_strings"></div>
													</div>
													<div class="cvv" style="width:50%;">
														<label class="formLabel b2Label">CVV</label>
														<input type ="text" class="billInput exp" name ="cvv" id="cvv" style="width:60px;">
														<div id='app2Form_cvv_errorloc' class="error_strings"></div>
													</div>
												</div>
												<div class="dobDiv">
													<label class="formLabel b2Label">Zip Code</label>
													<input type ="number" class="billInput" name ="billingZipcode" id="billingZipcode">
													<div id='app2Form_billingZipcode_errorloc' class="error_strings"></div>
												</div>
												<div class="emailDiv">
													<label class="formLabel b2Label">Phone Number</label>
													<input type ="tel" class="billInput" name ="payeePhone" id="payeePhone">
													<div id='app2Form_payeePhone_errorloc' class="error_strings"></div>
												</div>
												<div class ="billForm1Btn">
													<a href="billinvoice.php"><input type ="button" name="back" value="Back"class="billFomr1Button"></a>
													<button type="submit" name="commit" value="true" class="billFomr1Button" id="billFomr1Continue" onclick = "JavaScript:return Bill2validation();" >Next</button>
												</div>
												<p><input type ="hidden"  value="1" name='pg3'/> </p>
											</form>
									
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
	</body>
</html>