<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

if($username==null || $password==null)
{

	echo "please fill up all fields";
}

else{
	$file=fopen('user.txt','r');
	while(!feof($file))
	{
		$data=fgets($file);
	    $user=explode("|", $data);
	    if($username==trim($user[0]) && $password==trim($user[2]))
	    {
	    	setcookie('status','true',time()+3600,'/');
	    	header('location:home.php?username='.$username.'&password='.$password);
	    }
	    else{
	    	echo "incorrect username or password";
	    	break;

	    }


	}
}
?>