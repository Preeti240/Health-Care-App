 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<meta charset="utf-8">
		<title>Order Confirmation</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script src="map.js"> </script> 
		<script src="index.js" ></script>
<?php session_start();

?>
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
								<?php

								$servername = "localhost";
									$dbusername = "root";
									$password = "";
									$dbname = "clinic_db";
									
									$disCardValue = substr($_SESSION['cardNo'], 12, 4); // hidding the entered card no with xxx's and displaying the last 4 digits
									$sql = "SELECT Invoice_no FROM shop_payments WHERE id='$_SESSION[id]' limit 1;";
									 // CONNECT TO MYSQL
									 
									 // CREAT A CONNECTION 
									 $connection = new mysqli($servername , $dbusername , $password , $dbname );
									 // check connection 
									 if ($connection->connect_error){
										die("connection failed ". $connection-> connect_error); // if conncetion failed 
									 }// end if 
									 try {
										if ($connection->query($sql)) {
										$result = $connection->query($sql);	
										$value = mysqli_fetch_object($result);
										$orderNo = $value->Invoice_no;
										//INCLUDE THE WHOLE PAGE OVER HERE PG3
										}else {
											die("insert failed ". mysqli_error($connection));
										}
									 } catch (Exception $e){
									 ECHO ("error:" . $e->getMessage()); // error handling 
									 } //end try catch
									 $connection->close();
												$email=$_SESSION['email'];
												$total=round($_SESSION['totals'], 2);
											
												$name = $_SESSION['name'];
												$adress = $_SESSION['adress'];
												$city = $_SESSION['city'];
												$state = $_SESSION['shoperState'];
												$zip = $_SESSION['shoperZip'];
												$cardNo = $_SESSION['cardNo'];
												
												
												require_once 'mailer.php';

												$mail->addAddress($email, $name);     // Add a recipient
												$mail->Subject = 'Your KCC Pharmacy order Confirmtion';
												$mail->Body    = "'<h2 style='color:red'>Hello $name,</h2><p>Thank you for shopping with us. Your order is on its way.</p><p><b style='color:red'>Details </b></p><p> order No:#$orderNo</p> <p>Ship to:<br>$name<br>$adress<br>$city<br>$state<br>$zip.</p><p><b>Order Total:$total</b></p>";
												$mail->AltBody = 'Dear Customer, Your order is Confirmed and on its way';

												if ($mail->send()) {}
												
							?>
								<div class="marketGrid">
									<div >
										<ul class="breadcrumb">
										  <li><a href="index.html">Home</a></li>
										  <li><a href="pharmacy.php">Pharmacy Store</a></li>
										  <li><a href="shopPayment.php">Shipping</a></li>
										  <li>Order Confirmation</li>
										</ul>
									
									</div>
									<div class="orderConfirm">
										<div class="thnkHeader"> <h2> Thank You for Your Order.</h2></div>
									</div>
									<div class="thnkHeader">
										<p> We are processing it right now. You will receive an email confirmation shortly.</p>
										<p> Please <a  href="javascript:window.print();">Print this page</a> or write down Order Number(see below).</p>
									</div>
									<div class="billpg4DetailsDiv">
									<p>Your Transaction No is:<b>#<?php echo $orderNo; ?></b></p>
									<p>Your order id is:<b>#<?php echo $_SESSION['id']; ?></b></p>
									<p>Order Details</p>
									<p>Card No:<b>xxxx-xxxx-xxxx-<?php echo $disCardValue ?></p>
									<p> Ship to :<br><?php echo $name; ?>
									<br><?php echo $adress; ?>
									<br><?php echo $city; ?>
									<br><?php echo $state; ?>
									<br><?php echo $zip; ?>
									</p>
									<p> Order Total: $<b><?php echo $total;?></b></p>
								</div>
									<div class="printDiv">
									<a class="b4 d4" href="index.html">Back to Home Page</a>
	
								</div>
								</div>
							</div>
																		
									
					</div>
								<div class="clr"></div>								
				</div>
							
			</main>
						<?php session_unset();
							?>
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