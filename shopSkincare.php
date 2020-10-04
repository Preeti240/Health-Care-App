<?php session_start();?>
 <!DOCTYPE html>
<!-- Created by Mohammed Abdulla-->
 <html>
	<head>
		<meta charset="utf-8">
		<title>Skin Care</title>
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
									<div class="shopbanner1"><img src="images/skinbanner1.jpg" class="bannerb1 skin"><img src="images/skinbanner2.jpg" class="bannerb2"></div>
								</div>
								
								<div class="marketGrid">
									<div >
										<ul class="breadcrumb">
										  <li><a href="index.html">Home</a></li>
										  <li><a href="pharmacy.php">Pharmacy Store</a></li>
										  <li>Skin Care</li>
										</ul>
									
									</div>
									<div class="productGrid">
										<div class="itemContainer" id="itemContainer1">
											<div class="itemGrid">
												<div class="productImage">
													<img src="images/vichyspa.jpg" id="imgIco1">
												</div>
												<div class="productPrice">
													<label>$<span id="price1">14.49</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName1">Vichy Thermal Spa Water</span>
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
													<img src="images/flintstones.jpg" id="imgIco2">
												</div>
												<div class="productPrice">
													<label>$<span id="price2">17.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName2">Flintstones Complete Children's Multivitamin Supplement Gummies</span>
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
													<img src="images/derma.jpg" id="imgIco3">
												</div>
												<div class="productPrice">
													<label>$<span id="price3">19.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName3">Derma E DMAE - Alpha Lipoic C-Ester Creme, 2 OZ</span>
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
													<img src="images/aveeno.jpg" id="imgIco4">
												</div>
												<div class="productPrice">
													<label>$<span id="price4">17.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName4">Aveeno Positively Radiant Night Cream with Vitamin B3,1.7OZ</span>
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
													<img src="images/panoxy.jpg" id="imgIco5">
												</div>
												<div class="productPrice">
													<label>$<span id="price5">11.19</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName5">PanOxyl 4% Benzoyl Peroxide Acne Creamy Wash, 6 OZ</span>
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
													<img src="images/terrasil.jpg" id="imgIco6">
												</div>
												<div class="productPrice">
													<label>$<span id="price6">16.79</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName6">Terrasil Eczema & Psoriasis 2 Tube System</span>
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
													<img src="images/cerave.jpg" id="imgIco7">
												</div>
												<div class="productPrice">
													<label>$<span id="price7">27.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName7">CeraVe Skin Restoring System for Eczema Prone Skin, 5.39 OZ</span>
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
													<img src="images/provent.jpg" id="imgIco8">
												</div>
												<div class="productPrice">
													<label>$<span id="price8">16.49</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName8">Provent Eczema & Psoriasis Non-Steroidal Spray</span>
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
													<img src="images/aveenoanti.jpg" id="imgIco9">
												</div>
												<div class="productPrice">
													<label>$<span id="price9">14.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName9">Aveeno Anti-Itch Eczema Therapy Moisturizing Cream</span>
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
													<img src="images/ceravesmooth.jpg" id="imgIco10">
												</div>
												<div class="productPrice">
													<label>$<span id="price10">16.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName10">CeraVe Eczema Soothing Body Wash, 10 OZ<span>
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
													<img src="images/aveenobaby.jpg" id="imgIco11">
												</div>
												<div class="productPrice">
													<label>$<span id="price11">7.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName11">Aveeno Baby Wash Skin Relief Body Wash, Fragrance Free</span>
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
													<img src="images/nivea.jpg" id="imgIco12">
												</div>
												<div class="productPrice">
													<label>$<span id="price12">9.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName12">Nivea Smooth Indulgence Hand Cream, 3.5 OZ</span>
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
													<img src="images/blade3.jpg" id="imgIco13">
												</div>
												<div class="productPrice">
													<label>$<span id="price13">3.89</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName13">Blade Intense Relief Hand Cream, 2.7 OZ</span>
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
													<img src="images/burts.jpg" id="imgIco14">
												</div>
												<div class="productPrice">
													<label>$<span id="price14">8.99</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName14">Burt's Bees Hand Cream, Almond & Milk</span>
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
													<img src="images/eos.jpg" id="imgIco15">
												</div>
												<div class="productPrice">
													<label>$<span id="price15">2.79</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName15">EOS Hand Lotion</span>
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
													<img src="images/sports.jpg" id="imgIco16">
												</div>
												<div class="productPrice">
													<label>$<span id="price16">10.49</span></label>
												</div>
												<div class="productLabel">
													<span class="productName" id="productName16">Coppertone Sport High Performance Sunscreen, 8 OZ</span>
												</div>
												<div class="productAddBtn">
													<p  id="qq"class="pQTY">QTY<input type="number" max="10" min="1"class="qauntity" id="qauntity16"/></p>
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
											<p>Total<span class="cartPrice"  id="cartPrice">US$<b id="cartprce"></b></span></p>
											<input type="hidden"  value="" name="totals" id="total">
										</div>
										<div class="cartButton" id="cartBtnDiv">
											<input type="submit"  name="submit" class="cartBtn" id="cartButton" value="Confirm the Order"/>
											<input type="hidden"  value="1" name="btn" id="total">
										</div>
										</form>
										
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
			<script src="js.js" ></script>
	</body>
</html>