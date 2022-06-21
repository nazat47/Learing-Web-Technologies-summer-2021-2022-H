<?php
if(!isset($_COOKIE['status']))
{
	header('location:login.html');
}

?>
<html>
<head>
	<title>Profile</title>
</head>
<body>
     <table border="1">
     	<tr>
     		<th>Profile</th>
     	</tr>
     	<tr>
     		<td>
     			ID
     		</td>
     		<td>16-10101-2</td>
     	</tr>
     	<tr>
     		<td>NAME</td>
     		<td>Bob</td>
     	</tr>
     	<tr>
     		<td>USER TYPE</td>
     		<td>Admin</td>
     	</tr>
     	<tr>
     		<td><a href="home.php">Go home</a></td>
     	</tr>
     	
     </table>
</body>
</html>
