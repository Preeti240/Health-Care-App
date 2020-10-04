<!DOCTYPE html>
<html>
<?php session_start();?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
<script>
	$(document).ready(function(){
		
  //  document.getElementById('gad').click();
});
</script>
<style>
/* Full-width input fields */
.ipl {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.containerlog {
	
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.10s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
		
<button class="btn" id="gad" onclick="document.getElementById('id01').style.display='block'">Login</button>

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
	  <p>OR</p>
	   <span onclick="guest()" class="button" >Continue as Guest</span>
		<input type ="hidden"  value="1" name="logged"/>		WE ARE NOT SUBMITTING FORM SO SESSION USER IS NOT DEFINE. THATS THE ERROR!!!!!
    </div>

    <div class="container" style="background-color:#f1f1f1">
      
    </div>
	
  </form>
</div>
<?php

if(isset($_POST["submit1"]) and $_POST['submit1']==1)
{
$_SESSION['username']=$_POST['t1'];
$pwd=md5($_POST["t2"]);
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"clinic_db");
	$count=0;
	$res=mysqli_query($link,"select * from loginregister where username='$_SESSION[username]' && password='$pwd'");
	$count=mysqli_num_rows($res);
    if($count>0)
	{
	?>
	<script type="text/javascript">
	//window.location="appointmentpage2.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script type="text/javascript">
	alert("incorrect username or password");
	</script>
	<?php
	}
}
?>
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
