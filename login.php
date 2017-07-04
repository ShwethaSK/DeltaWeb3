<?php
session_start();
$error='';
if(isset($_POST['submit']))
{
	if((empty($_POST['username']))||(empty($_POST['password'])))
		$error="Username or password is invalid";
else
{
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"sys");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$username=stripslashes($username);
	$password=stripslashes($password);
	$username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);
	$query=mysqli_query($con,"SELECT * FROM Users WHERE password=SHA('$password') AND username='$username'") or die(mysqli_error());
	$rows=mysqli_num_rows($query);
	if($rows==1)
	{
		$_SESSION['login_user']=$username;
		header("Location:profile.php");
	}
	else
		$error="Username or password is invalid";
mysqli_close($con);
}
}
?>