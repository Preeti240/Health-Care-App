var total = 0;
function btn(j) {
	var imgsrc = document.getElementById("imgIco"+j).getAttribute("src");
	var productName = document.getElementById("productName"+j).innerText;
	var qty = document.getElementById("qauntity"+j).value;
	var price = document.getElementById("price"+j).innerText;
	var ids=j;
	if (qty==""){
		alert("Please Enter the quantity for the item!")
		location.reload();
	} else {
		if (document.getElementById("cartBasketDiv").classList.contains("sshow")) {
			var subTotals = itemCreator (imgsrc, productName, qty, price, ids);
		}else {
			document.getElementById("cartBasketDiv").classList.toggle("sshow");
			var subTotals = itemCreator (imgsrc, productName, qty, price, ids);
		}
	return subTotals;
	}
}

function itemCreator (imgsrc, productName, qty, price, i){
	if (document.getElementById("itemsDiv"+i)==null) {
		var itemlistsDiv = document.getElementById("itemlistsDiv");
		
		var cartForm = document.getElementById("cartForm");
		
		var itemsDiv = document.createElement("div");
		itemsDiv.setAttribute("id", "itemsDiv"+i);
		cartForm.appendChild(itemsDiv);
		document.getElementById("itemsDiv"+i).classList.add("items");
		
		var itemIcon = document.createElement("div");
		itemIcon.setAttribute("id", "itemIcon"+i);
		itemsDiv.appendChild(itemIcon);
		document.getElementById("itemIcon"+i).classList.add("itemIcon");
		
		var img = document.createElement("img");
		img.setAttribute("id", "imgIcon"+i);
		itemIcon.appendChild(img);
		img.setAttribute("src", imgsrc);
		document.getElementById("imgIcon"+i).classList.add("imgg");
		
		var itemLab = document.createElement("div");
		itemLab.setAttribute("id", "itemLab"+i);
		itemsDiv.appendChild(itemLab);
		document.getElementById("itemLab"+i).classList.add("itemLab");
		
		var itemLabel = document.createElement("label");
		itemLabel.setAttribute("id", "iLabel"+i);
		itemLabel.setAttribute("name",  "iLabel"+i);
		itemLabel.setAttribute("value", productName);
		itemLab.appendChild(itemLabel);
		document.getElementById("iLabel"+i).classList.add("itemlabel");
		itemLabel.innerText=productName;
		
		var qt = document.createElement("label");
		qt.setAttribute("id", "iqt"+i);
		itemLab.appendChild(qt);
		document.getElementById("iqt"+i).classList.add("qt");
		qt.innerText="Qty: ";
		
		var qtNo = document.createElement("span");
		qtNo.setAttribute("id", "iqtNo"+i);
		qt.appendChild(qtNo);
		qtNo.innerText=qty;		
		
		var prce = document.createElement("label");
		prce.setAttribute("id", "iprce"+i);
		itemLab.appendChild(prce);
		document.getElementById("iprce"+i).classList.add("prce");
		//var newPrice = qty*price;
		var subTotal = qty*price;
		prce.innerText="Price: $"+parseInt(subTotal);	
		
		return subTotal;		
	} else {
		
		var xqty = document.getElementById("iqtNo"+i).innerText;
		var newQty = parseInt(xqty) + parseInt(qty);
		document.getElementById("iqtNo"+i).innerText=newQty;
		var newSubTotal = newQty*price;
		document.getElementById("iprce"+i).innerHTML="Price: $"+newSubTotal;
		return newSubTotal;
	}
}

function totals(rate){
	 total  += rate +1;
	 document.getElementById("cartprce").innerHTML=total;
	  //document.getElementById("total").setAttribute("value", total);
	document.getElementById("total").value=total;
}

// Get the modal
function cancel(){
	document.getElementById('id01').style.display='none';
}
function guest(){window.location.assign("appointmentpage2.php");}
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
       document.getElementById('id01').style.display='none';
    }
}

window.addEventListener("load", function () {
	// EventLisnters for the items buttons 
	document.getElementById("addBasketBtn1").addEventListener("click", function() {var subRate= btn(1); totals(subRate);}, false);
	document.getElementById("addBasketBtn2").addEventListener("click", function() {var subRate= btn(2); totals(subRate);}, false);
	document.getElementById("addBasketBtn3").addEventListener("click", function() {var subRate= btn(3); totals(subRate);}, false);
	document.getElementById("addBasketBtn4").addEventListener("click", function() {var subRate= btn(4); totals(subRate);}, false);
	document.getElementById("addBasketBtn5").addEventListener("click", function() {var subRate= btn(5); totals(subRate);}, false);
	document.getElementById("addBasketBtn6").addEventListener("click", function() {var subRate= btn(6); totals(subRate);}, false);
	document.getElementById("addBasketBtn7").addEventListener("click", function() {var subRate= btn(7); totals(subRate);}, false);
	document.getElementById("addBasketBtn8").addEventListener("click", function() {var subRate= btn(8); totals(subRate);}, false);
	document.getElementById("addBasketBtn9").addEventListener("click", function() {var subRate= btn(9); totals(subRate);}, false);
	document.getElementById("addBasketBtn10").addEventListener("click", function() {var subRate= btn(10); totals(subRate);}, false);
	document.getElementById("addBasketBtn11").addEventListener("click", function() {var subRate= btn(11); totals(subRate);}, false);
	document.getElementById("addBasketBtn12").addEventListener("click", function() {var subRate= btn(12); totals(subRate);}, false);
	document.getElementById("addBasketBtn13").addEventListener("click", function() {var subRate= btn(13); totals(subRate);}, false);
	document.getElementById("addBasketBtn14").addEventListener("click", function() {var subRate= btn(14); totals(subRate);}, false);
	document.getElementById("addBasketBtn15").addEventListener("click", function() {var subRate= btn(15); totals(subRate);}, false);
	document.getElementById("addBasketBtn16").addEventListener("click", function() {var subRate= btn(16); totals(subRate);}, false);
	}, false);