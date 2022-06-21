<?php
$password=$_REQUEST['password'];
$npassword=$_REQUEST['npassword'];
$rpassword=$_REQUEST['rpassword'];
if($password==null || $rpassword==null || $npassword==null)
{
	echo "empty fields";
}
else{
	if($rpassword!=$npassword)
	{
		echo "password didnt match";
	}
	else{
		header('location:regcheck.php?password='.$npassword);
	}
}
?>