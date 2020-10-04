 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
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
					<?php 
								$username = $_SESSION['Pusername'];
								
								if($username!="") {
									echo $username;
									$servername = "localhost";
									$dbusername = "root";
									$password = "";
									$dbname = "clinic_db";
									$sql = "select * from invoices where email='$username';";
									$sql2 = "select * from bill_payments where bill_Email='$_SESSION[Pusername]'";
									$connection = new mysqli($servername , $dbusername , $password , $dbname );
									 // check connection 
									 if ($connection->connect_error){
										die("connection failed ". $connection-> connect_error); // if conncetion failed 
										
									 }// end if 
									 
									 try {
										if ($connection->query($sql)) {
										$count=0;
										$count2=0;
										// send the sql query 
										$myData = $connection->query($sql);
										$myData2 = $connection->query($sql2);
										$count=mysqli_num_rows($myData);
										$count2=mysqli_num_rows($myData2);
										if ($count>0) {
											while ($record = mysqli_fetch_array($myData)) {
												$invoiceDate = $record['invoice_date'];
												$account = $record['account_no'];
												$name = $record['patient_name'];
												$amount = $record['amount'];
												$_SESSION['invoiceDate']=$invoiceDate;
												$_SESSION['account']=$account;
												$_SESSION['name']=$name;
												$_SESSION['amount']=$amount;
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
									}else {	ECHO "else";$lname="";	}
							?>
						<main id="contentBar">
							<div class="article">
								<div class = "containerBillpg2">
									<div class = "billingCustomerInfo">
										<p class="billingHeading"> Bill Invoice</p>
										<div class = "billFormDiv">
										<div class="emailDiv">
												<p><label class="formLabel">Invoice Date</label>
												<label class="billRecord"><?php echo $invoiceDate;?></label></p>
												
											</div>
											<div class="garuntatorDiv">
												<p>
												<label class="formLabel">Account no</label>
												<label class="billRecord"><?php echo $account;?></label>
												</p>
												
											</div>
											<div class="fNameDiv">
												<p><label class="formLabel">Patient Name</label>
												<label class="billRecord"><?php echo $name;?></label></p>
												
											</div>
											<div class="amntDiv">
												<p><label class="formLabel">Amount</label>
												<label class="billRecord"><?php echo $amount;?></label></p>
													
											</div>
											<div class="amntDiv">
												<p><label class="formLabel">Status</label>
												<label class="billRecord"><?php if ($count2>0) { echo "Paid"; }else {echo "Due";}?></label></p>
													
											</div>
											<div class ="billForm1Btn">
												<a href="payBill.php"><input type ="button" name="back" value="Pay Later"class="billFomr1Button"></a>
												<a href="billingpg3.php"><button type="button" class="billFomr1Button" id="billFomr1Continue"  >Pay Now</button></a>
												<?php if ($count2>0) {
												?>
												<script type="text/javascript">
													document.getElementById("billFomr1Continue").disabled = true;
												</script>
												<?php
												session_unset();
												}
												?>
											</div>
											

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