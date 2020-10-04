// created by Mohammed Abdulla

// this function validates appointment form on the 2nd page.
function validation() {					
					var frmvalidator  = new Validator("app2Form");
					frmvalidator.EnableOnPageErrorDisplay();
					frmvalidator.EnableMsgsTogether();

					if (document.getElementById('reasonForVisit').value==""){
						frmvalidator.addValidation("visitPatientReason","req","Please enter your reason For Visit");
					}else {
						document.getElementById('app2Form_visitPatientReason_errorloc').innerHTML=""; // CLEARING THE error message
					}
					
					if (document.getElementById('visitYes').checked==false){
						frmvalidator.addValidation("visitNewpatient","selone","Please select an option 'Yes or No'");
						if (document.getElementById('visitNo').checked==false){
							frmvalidator.addValidation("visitNewpatient","selone","Please select an option 'Yes or No'");
							}
						}else {
						document.getElementById('app2Form_visitNewpatient_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('visitPrDocYes').checked==false){
						frmvalidator.addValidation("hasPhysian","selone","Please select an option 'Yes or No'");
						if (document.getElementById('visitPrDocNo').checked==false){
							frmvalidator.addValidation("hasPhysian","selone","Please select an option 'Yes or No'");
						}
					}else {
						document.getElementById('app2Form_hasPhysian_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('emailAddress').value==""){
						frmvalidator.addValidation("visitEmail","req", "Email is required");
						frmvalidator.addValidation("visitEmail","email");
					}else {
						document.getElementById('app2Form_visitEmail_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('patientFirstName').value==""){
						frmvalidator.addValidation("patientFirstName","req","Please enter your First Name");
					}else {
						document.getElementById('app2Form_patientFirstName_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('patientLastName').value==""){
						frmvalidator.addValidation("patientLastName","req","Please enter your Last Name");
					}else {
						document.getElementById('app2Form_patientLastName_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('pdob').value==""){
						frmvalidator.addValidation("pdob","","DOB is required");
					}else {
						document.getElementById('app2Form_pdob_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('phoneNumber').value==""){
						frmvalidator.addValidation("patientPhoneNumber","req","Phone Number is required");
						frmvalidator.addValidation("patientPhoneNumber","numeric","numbers only");
						frmvalidator.addValidation("patientPhoneNumber","minlen=10","not enough numbers");
					}else {
						document.getElementById('app2Form_patientPhoneNumber_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('visitGender').value=="0"){
						frmvalidator.addValidation("visitGender","dontselect=0","Please select an option 'Male or Female'");
						
					}else {
						document.getElementById('app2Form_visitGender_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('patientZipCode').value==""){
						frmvalidator.addValidation("patientZipCode","numeric","numbers only");
						frmvalidator.addValidation("patientZipCode","minlen=5","not a valid zipcode");
						frmvalidator.addValidation("patientZipCode","req","zip code is required");
					}else {
						document.getElementById('app2Form_patientZipCode_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('visit_terms_911').checked==false){
						frmvalidator.addValidation("agreeTerms","selmin=2","please check all boxes to continue");
						if (document.getElementById('visit_custom_terms').checked==false){
							frmvalidator.addValidation("agreeTerms","selmin=2","please check all boxes to continue");
						}
					}else {
						document.getElementById('app2Form_agreeTerms_errorloc').innerHTML=""; // CLEARING THE error message
					}
    
}

// this function validates the pay bill page 2 form
function Bill2validation() {					
					var frmvalidator  = new Validator("billForm2");
					//frmvalidator.EnableOnPageErrorDisplay();
					frmvalidator.EnableMsgsTogether();

					if (document.getElementById('card').checked==false){
						frmvalidator.addValidation("paymentType","selone","Please select an option 'Credit or Debit'");
					}else {
						document.getElementById('app2Form_paymentType_errorloc').innerHTML=""; // CLEARING THE error message
					}
					
					if (document.getElementById('cardHolderName').value==""){
						frmvalidator.addValidation("cardHolderName","req", "Please Enter the Card holder Name");
						
					}else {
						document.getElementById('app2Form_cardHolderName_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('cardNo').value==""){
						frmvalidator.addValidation("cardNo","req","Card No required");
						frmvalidator.addValidation("cardNo","numeric","Please Enter Card numbers only");
						frmvalidator.addValidation("cardNo","minlen=10","not enough numbers");
					}else {
						document.getElementById('app2Form_cardNo_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('expDate').value==""){
						frmvalidator.addValidation("expDate","req","Exp Date required");
					}else {
						document.getElementById('app2Form_expDate_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('cvv').value==""){
						frmvalidator.addValidation("cvv","req","CVV required");
					}else {
						document.getElementById('app2Form_cvv_errorloc').innerHTML=""; // CLEARING THE error message
					}
					
					if (document.getElementById('billingZipcode').value==""){
						frmvalidator.addValidation("billingZipcode","req","ZipCode is required");
						
					}else {
						document.getElementById('app2Form_billingZipcode_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('payeePhone').value==""){
						frmvalidator.addValidation("payeePhone","req","Phone No is required");
						
					}else {
						document.getElementById('app2Form_payeePhone_errorloc').innerHTML=""; // CLEARING THE error message
					}
    
}
function appValidation() {
  if (document.getElementById("genAppointmentDate").value=="") {
	document.getElementById("errormsg").innerHTML="*Date is required.";
	event.preventDefault();
    return false;
  }
  if (document.getElementById("genAppointmentTime").value=="") {
	document.getElementById("errormsg").innerHTML="*Time is required.";
	event.preventDefault();
    return false;
  }
  if (document.getElementById("docTypo").value=="0") {
	document.getElementById("errormsg").innerHTML="* Select Doctor.";
	event.preventDefault();
    return false;
  }
  return true;
}
function womenValidation(){
  if (document.getElementById("womenAppointmentDate").value=="") {
	document.getElementById("errormsg").innerHTML="*Date is required.";
	event.preventDefault();
    return false;
  }
  if (document.getElementById("womenAppointmentTime").value=="") {
	document.getElementById("errormsg").innerHTML="*Time is required.";
	event.preventDefault();
    return false;
  }
  if (document.getElementById("wdocTypo").value=="0") {
	document.getElementById("errormsg").innerHTML="* Select Doctor.";
	event.preventDefault();
    return false;
  }
	  return true;
}
function eValidation() {
  if (document.getElementById("eAppointmentDate").value=="") {
	document.getElementById("errormsg").innerHTML="*Date is required.";
	event.preventDefault();
    return false;
  }
  if (document.getElementById("eAppointmentTime").value=="") {
	document.getElementById("errormsg").innerHTML="*Time is required.";
	event.preventDefault();
    return false;
  }
  if (document.getElementById("edocTypo").value=="0") {
	document.getElementById("errormsg").innerHTML="* Select Doctor.";
	event.preventDefault();
    return false;
  }
	 return true;
}

function shopValidation() {

					if (document.getElementById('shoperName').value==""){
						document.getElementById('shopPaymentForm_name_errorloc').innerHTML="*Name Required";
						event.preventDefault();
						
					}else {
						document.getElementById('shopPaymentForm_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('shoperAddress').value==""){
						document.getElementById('adress_name_errorloc').innerHTML="*Adress Required";
						event.preventDefault();
					}else {
						document.getElementById('adress_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('shoperCity').value==""){
						document.getElementById('city_name_errorloc').innerHTML="*City Required";
						event.preventDefault();
					}else {
						document.getElementById('city_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('state-dropdown').value=="0"){
						document.getElementById('state_name_errorloc').innerHTML="*State Required";
						event.preventDefault();
					}else {
						document.getElementById('state_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('shzip').value==""){
						document.getElementById('zip_name_errorloc').innerHTML="*ZipCode Required";
						event.preventDefault();
					}else if (isNaN(document.getElementById('shzip').value)==true) {
						document.getElementById('zip_name_errorloc').innerHTML="*ZipCode has to be a Number";
					}else { 
						document.getElementById('zip_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('shphone').value==""){
						document.getElementById('phone_name_errorloc').innerHTML="*Phone Number Required";
						event.preventDefault();
					}else if (isNaN(document.getElementById('shphone').value)==true) {
						document.getElementById('phone_name_errorloc').innerHTML="*Phone Number has to be a Number";
					}else if (document.getElementById('shphone').value<10){
						document.getElementById('phone_name_errorloc').innerHTML="Phone Numbe is more than 10 digits";
						event.preventDefault();
					}else {
						document.getElementById('phone_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('shpemail').value==""){
						document.getElementById('email_errorloc').innerHTML="*Email Required";
						event.preventDefault();
					}else {
						document.getElementById('email_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('cardNo').value==""){
						document.getElementById('crd_name_errorloc').innerHTML="*Card Number Required";
						event.preventDefault();
					}else if (isNaN(document.getElementById('cardNo').value)==true) {
						document.getElementById('crd_name_errorloc').innerHTML="*card No has to be a Number";
						event.preventDefault();
					}else if (document.getElementById('cardNo').value<16){
						document.getElementById('crd_name_errorloc').innerHTML="*Card Number is not 16 digits";
						event.preventDefault();
					}else {
						document.getElementById('crd_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('shexp').value==""){
						document.getElementById('exp_name_errorloc').innerHTML="*Expiration Date Required";
						event.preventDefault();
					}else {
						document.getElementById('exp_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					if (document.getElementById('billZip').value==""){
						document.getElementById('billZip_name_errorloc').innerHTML="*Billing ZipCode Required";
						event.preventDefault();
						return false;
					}else if (isNaN(document.getElementById('billZip').value)==true) {
					document.getElementById('billZip_name_errorloc').innerHTML="*Billing ZipCode has to be a Number";
					}else {
						document.getElementById('billZip_name_errorloc').innerHTML=""; // CLEARING THE error message
					}
					
					
					
					
	 return true;				
}



/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
window.addEventListener("load", function () {
	// EventLisnters for the items buttons 
	//document.getElementById("genGoBtn").addEventListener("click", function() {appValidation()}, false);
	//document.getElementById("wGoBtn").addEventListener("click", function() {womenValidation()}, false);
	//document.getElementById("eGoBtn").addEventListener("click", function() {eValidation()}, false);
	document.getElementById("contBtn").addEventListener("click", function() {shopValidation()}, false);
	
	}, false);