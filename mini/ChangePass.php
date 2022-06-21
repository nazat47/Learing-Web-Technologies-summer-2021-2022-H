<?php
if(!isset($_COOKIE['status']))
{
	header('location:login.html');
}
?>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<form action="passcheck.php" method="post" enctype="">
		<fieldset>
			<legend>Change Password</legend>
			Current Password:<input type="Password" name="password" value=""><br>
			New Password:<input type="Password" name="npassword" value=""><br>
			Retype Password:<input type="Password" name="rpassword" value=""><br>
			<input type="hidden" name="cpass" value="new"><br>
			<input type="submit" name="submit" value="change">
		</fieldset>
	</form>

</body>
</html>
