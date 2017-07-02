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
$con=mysql_connect("localhost","root","")or die("Failed to connect to database:"+mysql_error());
$db=mysql_select_db("test",$con)or die("Failed to connect to database:"+mysql_error());
if(isset($_POST['submit']))
SignUp();
function SignUp()
{
if(!empty($_POST['username']))
{
	$query=mysql_query("SELECT * FROM Users WHERE username='$_POST[username]' AND password='$_POST[password]'")or die(mysql_error());
	if(!$row=mysql_fetch_array($query))
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
    $query=mysql_query("INSERT INTO Users(fullName,email,userName,password) VALUES('$name','$email','$username',SHA('$password'))") or die(mysql_error());
    if($query)
    {
    	echo "Registration completed successfully";
    	echo "<a href='index.php'>Click here to go back to homepage</a>";
    }
}
?>