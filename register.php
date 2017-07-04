<!DOCTYPE html>
<html>
<head>
	<title>Registration status</title>
	<style type="text/css">
		body{
			background-color: lavender;
			color:maroon;
		}
	</style>
</head>
<body>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","")or die("Failed to connect to database:"+mysqli_error());
$db=mysqli_select_db($con,"sys")or die("Failed to connect to database:"+mysqli_error());
if(isset($_POST['submit']))
SignUp();
function SignUp()
{
if(!empty($_POST['username']))
{
	$con=mysqli_connect("localhost","root","")or die("Failed to connect to database:"+mysqli_error());
$db=mysqli_select_db($con,"sys")or die("Failed to connect to database:"+mysqli_error());
	$query=mysqli_query($con,"SELECT * FROM Users WHERE username='$_POST[username]' AND password='$_POST[password]'")or die(mysqli_error());
	if(!$row=mysqli_fetch_array($query))
		NewUser();
	else
	{
		echo "Sorry You are already registered!!";
		echo "<a href='index.php'>Click here to go back to homepage</a>";
	}
}
}
function NewUser()
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
    $name=$_POST['name'];
    $con=mysqli_connect("localhost","root","")or die("Failed to connect to database:"+mysqli_error());
$db=mysqli_select_db($con,"sys")or die("Failed to connect to database:"+mysqli_error());
    $query=mysqli_query($con,"INSERT INTO Users(fullName,email,userName,password) VALUES('$name','$email','$username',SHA('$password'))") or die(mysqli_error());
    if($query)
    {
    	echo "Registration completed successfully<br />";
    	echo "<a href='index.php'>Click here to go back to homepage</a>";
    }
}
?>