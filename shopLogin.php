<?php session_start();?>
<!DOCTYPE html>
<html>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css" />

<body>
<div id="id01" class="modal animate" style="display:block;">
  
  <form class="modal-content " action="" method="POST">
    <div class="imgcontainer">
    
      <h2>Login below if you already has an account with us </h2>
    </div>

    <div class="containerlog">
	  <label id="error" style="color:red;"></label>
      <label><b>Username </b></label>
	  <input type="text" placeholder="Enter Username" name="t1" class="ipl" >
     

      <label><b>Password</b></label>
      
       <input type="password" name="t2" class="ipl" placeholder="Enter Password" >
      <button type="submit" class="button" name="submit1" value="1">Login</button>
	  <p>OR</p>
	   <span onclick="guest()" class="button" >Continue as Guest</span>
		<input type ="hidden"  value="1" name="logged"/>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      
    </div>
	
  </form>
</div>
<?php
$_SESSION['log'] =0;
if(isset($_POST["btn"]) and $_POST['btn']==1) {
$_SESSION['totals']=$_POST['totals'];

}
if(isset($_POST["submit1"]) and $_POST['submit1']==1)
{
	$_SESSION['log'] =1;
$_SESSION['submit1'] = $_POST['submit1'];
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
	window.location="shopPayment.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script type="text/javascript">
	document.getElementById("error").innerText="*Incorrect Username/Password";
	</script>
	<?php
	}
}
?>
<script>
function guest(){window.location.assign("shopPayment.php");}
</script>

</body>
</html>
