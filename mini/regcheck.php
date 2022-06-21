<?php
$id=$_REQUEST['id'];
$name=$_REQUEST['username'];
$password=$_REQUEST['password'];
$cpassword=$_REQUEST['cpassword'];
$chng=$_REQUEST['cpass'];
if($id==null || $name==null || $password==null || $cpassword==null)
{
	echo "please fill all the fields";
}
else{
	if($password!=$cpassword)
	{
		echo "passwords didnt match";
	}
	else
	{
		$user=$name."|".$id."|".$password."\r\n";
		$file=fopen('user.txt', 'a');
		fwrite($file, $user);
		if($chng=='new')
		{
			header('location:home.php');
		}else{
			header('location:login.html');
		
		}
		
		
	}
}
?>