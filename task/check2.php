<?php
//session_start();
$mail=$_REQUEST['mail'];
if($mail!=null){
	if(filter_var($mail, FILTER_VALIDATE_EMAIL))
	{
		echo "success";
	}
	else{
		echo "invalid request";
	}
}
else{
	echo "invalid request";
}
?>