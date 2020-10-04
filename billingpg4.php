<!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<?php session_start();?>
		<meta charset="utf-8">
		<title>KC CLINIC:Confirmation</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script src="index.js" type="text/javascript"></script>

	</head>
	<body>
		<div id="page">
			<header id="bill4header">
				<div class="b4head">	
					<div class="logob4">
						<div id="logo">
						<a href="index.html"><img src="KCClogo.png" alt="kc clinic"  /></a>
					<div id="topNav">
						<ul>
						<li><a href="aboutUs.html">About</a></li> 
						<li><a href="#">Help</a></li>
						</ul>
					</div>
					</div>
					</div>
					
					<div class="clr"></div><!--FOR CSS TO CLEAR THE SIDES IN T HE PAGE -->
				</div>
				
			</header>
			<div style = "width:100%;">
				
		
				<div id="contentt" >
					<div id="content-inner">
						<main id="contentBar">
							<?php
								
								if (isset($_POST['pg3']) and $_POST['pg3']==1) {
									// make sure that the insert code doesn't run until form2 is submitted .
									
									
									
									
									
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "clinic_db";
									// built select query 
																		
									$account = $_SESSION['account'];
									$amount = $_SESSION['amount'];
									$name = $_SESSION['name'];
									$invoiceDate = $_SESSION['amount'];
									$billEmail = $_SESSION['Pusername'];
									//
									$paymentType=$_POST['paymentType'];
									$cardHolderName=$_POST['cardHolderName'];
									$cardNo=$_POST['cardNo'];
									$expDate=$_POST['expDate'];
									$cvv=$_POST['cvv'];
									$billingZipcode=$_POST['billingZipcode'];
									$payeePhone = $_POST['payeePhone'];
									
									$disCardValue = substr($cardNo, 12, 4); // hidding the entered card no with xxx's and displaying the last 4 digits
									
									
									/*$paymentType = $_SESSION['paymentType'];
									$cardHolderName = $_SESSION['cardHolderName'];
									$cardNo = $_SESSION['cardNo'];
									$expDate = $_SESSION['expDate'];
									$cvv = $_SESSION['cvv'];
									$billingZipcode = $_SESSION['billingZipcode'];
									$payeePhone = $_SESSION['payeePhone'];
									*/
								
								
												
									$sql = "INSERT INTO bill_payments (account_no, amount, full_name, invoice_date, bill_Email, payment_Type, cardHolderName, card_No, exp_Date, cvv, billing_Zipcode, payee_Phone)	VALUES ('$account', '$amount', '$name', '$invoiceDate', '$billEmail', '$paymentType', '$cardHolderName', '$cardNo', '$expDate', '$cvv', '$billingZipcode', '$payeePhone');";
									$sql2 = "SELECT order_No FROM bill_payments WHERE account_no='$account' limit 1";
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
										$result = $connection->query($sql2);	
										$value = mysqli_fetch_object($result);
										$orderNo = $value->order_No;
										//INCLUDE THE WHOLE PAGE OVER HERE PG3
										}else {
											die("insert failed ". mysqli_error($connection));
										}
									 } catch (Exception $e){
									 ECHO ("error:" . $e->getMessage()); // error handling 
									 } //end try catch
									 $connection->close();
								} else {
									echo "not inserted";
								}
								
							
								// this function gets date and paste on given html elementFromPoint
								
								// Return date/time info of a timestamp; then format the output
								$mydate=getdate(date("U"));
								$dates= "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
								$num = range(001,10);
								
								
							?>
							<div class="billConfirmation">
								<div class = "thankyoub4">
									<h1> Thank You! Your Payement has been recieved</h1>
								</div>
								<div class="billpg4DetailsDiv">
									<p><b class="submitDate">Recieved On <?php echo $dates;?> </b></p>
									<p>Your Confirmatin No is:<b><?php echo $orderNo; ?></b></p>
									<p>Billing Details</p>
									<p>Card No:<b>xxxx-xxxx-xxxx-<?php echo $disCardValue ?></p>
									<p> Patient Name :<b> <?php echo $name; ?></b></p>
									<p> Amount paid: $<b><?php echo $amount;?></b></p>
									
								</div>
								<div class="printDiv">
									<a class="b4 prin" href="javascript:window.print();">Print this Confirmation</a>
									<a class="b4 d4" href="index.html">Back To Home Page</a>
	
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
			<?php  session_unset();?>
	</body>
</html>