<?php
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"clinic_db");
	$count=0;
	$res=mysqli_query($link,"select * from appointmenttable where doctor='$_SESSION[appDoc]' && appointment_date='$_SESSION[genAppointmentDate]' && appointment_time='$_SESSION[genAppointmentTime]'");
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	?>
	<script type="text/javascript">
	document.getElementById("errormsg").innerHTML = "<label>*Sorry this timing is not availible with the selected Doctor!<br/>Please Try different timing</label>";
	//alert("Sorry this timing is not availible");
	</script>
	<?php
	}
	else
	{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
	}
?>