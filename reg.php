<!DOCTYPE html>
<html>
<head>
	<title>
		Registration Page
	</title>
	<style type="text/css">
		body{
			background-color: pink;
		}
	h1{
		background-color: lightyellow;
		color: blue;
	}
	h2{
		background-color: lightblue;
		color:green;
	}
	</style>
</head>
<body>
<h1>Welcome to the registration page...</h1>
<h2>Please enter some basic details to finish registration</h2>
<fieldset style="width:75%">
	<legend>Registration form</legend>
	<table border="0">
	<tr>
		<form method="POST" action="register.php">
		<td>NAME</td><td><input type="text" name="name" /></td>
    </tr>
    <tr>
    <td>EMAIL</td><td><input type="text" name="email"/></td>
    </tr>
    <tr>
    	<td>USERNAME</td><td><input type="text" name="username" /></td>
    </tr>
    <tr>
    	<td>PASSWORD</td><td><input type="password" name="password"></td>
    </tr>
    <tr>
		<td>CONFIRM PASSWORD</td><td><input type="password" name="con_password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Sign-Up"></td>
		</tr>	
		</form>
	</table>
</fieldset>
</body>
</html>
<?php
define('HOST', 'localhost');
define('NAME', 'mysql');
define('USER','root');
define('PASSWORD', '');
$con=mysqli_connect(HOST,USER,PASSWORD) or die("Failed to connect to database:"+mysqli_error());
$db=mysqli_select_db($con,NAME)or die("Failed to connect to my database:"+mysqli_error());
if(mysqli_errno($con))
{
   echo "Failed to connect to database:"+mysqli_error();
}
mysqli_query($con,"CREATE TABLE Users
	(
	userId int(9) NOT NULL auto_increment,
	fullName VARCHAR(50) NOT NULL,
	userName VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
    PRIMARY KEY(userId))
	");
?>

