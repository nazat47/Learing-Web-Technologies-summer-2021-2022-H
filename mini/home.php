<?php
if(isset($_COOKIE['status']))
{
?>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2> Welcome <?php echo $_REQUEST['username']; ?></h2>
    <br><br>
    <a href="profile.php">Profile</a>
    <a href="ChangePass.php">Change Password</a>
    <a href="users.php">View Users</a>
    <a href="logout.php">Logout</a>


</body>
</html>
<?php
}
else{
	echo "invalid request";
}
?>