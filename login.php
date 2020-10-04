<!DOCTYPE html>
<html>
<?php session_start();?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css" />
<script>
// this script brings up the login modal after the appointment page 1
	$(document).ready(function(){
		
   document.getElementById('id01').style.display='block';
});
</script>
<body>
<div id="id01" class="modal animate">
  
  <form class="modal-content " action="" method="POST">
    <div class="imgcontainer">
      <span onclick="cancel()" class="close" title="Close Modal">&times;</span>
      <h2>Returning patient? login below to access to your info</h2>
    </div>

    <div class="containerlog">
      <label><b>Username</b></label>
	  <input type="text" placeholder="Enter Username" name="t1" class="ipl" >
     

      <label><b>Password</b></label>
      
       <input type="password" name="t2" class="ipl" placeholder="Enter Password" >
      <button type="submit" class="button" name="appLogBtn" value="1">Login</button>
	  <p>OR</p>
	   <span onclick="guest()" class="button" >Continue as Guest</span>
		<input type ="hidden"  value="1" name="logged"/>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      
    </div>
	
  </form>
</div>
<?php
$_SESSION['log']= 0;
if(isset($_POST["appLogBtn"]) and $_POST['appLogBtn']==1)
{
$_SESSION['log']=1;

$_SESSION['appUsername']=$_POST['t1'];
$pwd=md5($_POST["t2"]);
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"clinic_db");
	$count=0;
	$res=mysqli_query($link,"select * from loginregister where username='$_SESSION[appUsername]' && password='$pwd'");
	$count=mysqli_num_rows($res);
    if($count>0)
	{
	?>
	<script type="text/javascript">
	window.location="appointmentpage2.php";
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
	 window.location.assign("appointment.php");
}
function guest(){window.location.assign("appointmentpage2.php");}
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        window.location.assign("appointment.php");
    }
}
</script>

</body>
</html>
