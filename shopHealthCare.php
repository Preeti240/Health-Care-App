 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<meta charset="utf-8">
		<title>Health & Medicene.</title>
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
				
		
				<div id="content" >
					<div id="content-inner">
						<main id="contentBar">
							<div class="article">
								<div class = "bannerShop">
									<div class="shopbanner1"><img src="images/hcb2.jpg" class="bannerb1 hcb1"><img src="images/healthbanner2.jpg" class="bannerb2 hcb2"></div>
								</div>
								
								<div class="marketGrid">
									<div >
										<ul class="breadcrumb">
										  <li><a href="index.html">Home</a></li>
										  <li><a href="pharmacy.php">Pharmacy Store</a></li>
										  <li>Health Care</li>
										</ul>
									
									</div>
									<div class="productGrid">
										<div class="itemContainer" id="itemContainer1">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/viks.jpg" id="imgIco1">
												</div>
												<div class="productPrice">
													<label>$<span id="price1">7.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName1">Vicks Alcohol Free NyQuil Cold Nighttime Relief Liquid, 12OZ</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity1"/></p>
													<button class="addBtn basket" id="addBasketBtn1" >Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/dayquil.jpg" id="imgIco2">
												</div>
												<div class="productPrice">
													<label>$<span id="price2">8.49</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName2">Vicks DayQuil Cold & Flu Multi-Symptom Relief LiquiCaps</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity2"/></p>
													<button class="addBtn basket" id="addBasketBtn2" >Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/pinebros.jpg" id="imgIco3">
												</div>
												<div class="productPrice">
													<label>$<span id="price3">3.49</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName3">Pine Bros Softish Throat Drops Wild Cherry Flavor</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity3"/></p>
													<button class="addBtn basket" id="addBasketBtn3">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/coldflu.jpg" id="imgIco4">
												</div>
												<div class="productPrice">
													<label>$<span id="price4">5.29</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName4">Health Flu & Severe Cold Cherry Liquid</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity4"/></p>
													<button class="addBtn basket" id="addBasketBtn4">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/blore.jpg" id="imgIco5">
												</div>
												<div class="productPrice">
													<label>$<span id="price5">6.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName5">Biore Baking Soda Liquid Cleanser, 6.77 OZ</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity5"/></p>
													<button class="addBtn basket"id="addBasketBtn5" >Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/biore.jpg" id="imgIco6">
												</div>
												<div class="productPrice">
													<label>$<span id="price6">6.49</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName6">Biore Charcoal Pore Minimizer, 3.11 OZ</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity6"/></p>
													<button class="addBtn basket" id="addBasketBtn6">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/olay.jpg" id="imgIco7">
												</div>
												<div class="productPrice">
													<label>$<span id="price7">21.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName7">Olay Total Effects Anti-Aging Daily Face Moisturizer, 1.7 OZ</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity7"/></p>
													<button class="addBtn basket" id="addBasketBtn7" >Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/skinsuccess.jpg" id="imgIco8">
												</div>
												<div class="productPrice">
													<label>$<span id="price8">6.25</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName8">Palmer's Skin Success Fade Cream, 2.7 OZ</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity8"/></p>
													<button class="addBtn basket" id="addBasketBtn8" >Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/aleve.jpg" id="imgIco9">
												</div>
												<div class="productPrice">
													<label>$<span id="price9">10.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName9">Aleve Arthritis Cap Caplets, 100CT</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity9"/></p>
													<button class="addBtn basket"  id="addBasketBtn9">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/arnicare.jpg" id="imgIco10">
												</div>
												<div class="productPrice">
													<label>$<span id="price10">10.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName10">Arnicare Arthritis Tablets, 60CT<<span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity10"/></p>
													<button class="addBtn basket" id="addBasketBtn10">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/bengay.jpg" id="imgIco11">
												</div>
												<div class="productPrice">
													<label>$<span id="price11">5.79</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName11">Bengay Greaseless Pain Relieving Cream, 2OZ</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity11"/></p>
													<button class="addBtn basket" id="addBasketBtn11">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/bayer.jpg" id="imgIco12">
												</div>
												<div class="productPrice">
													<label>$<span id="price12">21.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName12">Bayer Back and Body Extra Strength Coated Caplets, 100CT</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity12"/></p>
													<button class="addBtn basket" id="addBasketBtn12">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/bandaid.jpg" id="imgIco13">
												</div>
												<div class="productPrice">
													<label>$<span id="price13">4.29</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName13">Band-Aid Flexible Fabric Adhesive Bandages, 30CT</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity13"/></p>
													<button class="addBtn basket" id="addBasketBtn13">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/hydrogen.jpg" id="imgIco14">
												</div>
												<div class="productPrice">
													<label>$<span id="price14">1.19</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName14">Hydrogen Peroxide Solution</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity14"/></p>
													<button class="addBtn basket" id="addBasketBtn14">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/nicrolette.jpg" id="imgIco15">
												</div>
												<div class="productPrice">
													<label>$<span id="price15">52.29</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName15">Nicorette 2 mg Original</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity15"/></p>
													<button class="addBtn basket" id="addBasketBtn15">Add to Basket</button>
												</div>
											</div>
										</div>
										<div class="itemContainer">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/mederma.jpg" id="imgIco16">
												</div>
												<div class="productPrice">
													<label>$<span id="price16">20.49</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName16">Mederma Scar Cream + SPF 30</span>
												</div>
												<div class="productAddBtn">
													<p class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity16"/></p>
													<button class="addBtn basket" id="addBasketBtn16">Add to Basket</button>
												</div>
											</div>
										</div>

									</div>
									<div class="cartBasket" id="cartBasketDiv">
										<div class="cartICon"><label class="carttitle">Shopping Cart</label></div>
										<hr>
										<div id="itemlistsDiv" class="ilistDiv">
											<form class="cartForm" id="cartForm" method="POST" action="shopLogin.php">
											
												
												<!--<div class="items" id="itemsDiv">
													<div class="itemIcon" id="itemIcon"><img src="images/iron.jpg" class="imgg" /></div>
													<div class="itemLab"><label id="itemlabel">Flintstones Complete Children's Multivitamin Supplement Gummies 25g</label>
														<label class="qt">Qty:<span id="qtyNo">3</span></label> <!--<input type="text" class="qtyText">
														<label class="prce">Price:US$200.00</label>
													
													</div>
													-->
											
										</div>
										<div class="cartTotal" id="cartTotalDiv">
										<div class="hiden"><input type="hidden" ></div>
											<p>Total<span class="cartPrice" id="cartPrice">US$<b id="cartprce"></b></span></p>
											<input type="hidden"  value="" name="totals" id="total">
										</div>
										<div class="cartButton" id="cartBtnDiv">
											<input type="submit" class="cartBtn" id="cartButton" value="Confirm the Order"/>
												<input type="hidden"  value="1" name="btn" id="total">
										</div>
									</form>
									</div>
									
									
								</div>
								<!-- article div ends-->
								<div class="clr"></div>								
							</div>
							
						</main>
					<!-- MAIN ENDS HERE-->	
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
			<script src="js.js" ></script>
	</body>
</html>