<?php
if(!isset($_COOKIE['status']))
{
	header('location:login.html');
}

?>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Users</th>
		</tr>
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>USER TYPE</td>
		</tr>
		<tr>
			<td>15-10101-3</td>
			<td>BOB</td>
			<td>Admin</td>
		</tr>
		<tr>
			<td>16-10102-2</td>
			<td>Anne</td>
			<td>User</td>
		</tr>
		<tr>
			<td>16-10103-2</td>
			<td>kent</td>
			<td>user</td>
		</tr>
		<tr>
			<td>16-10104-3</td>
			<td>james</td>
			<td>Admin</td>
		</tr>
		<tr>
			<td><a href="home.php">Go home</a></td>
		</tr>
		
	</table>

</body>
</html>