<!DOCTYPE html>
<html>
<head>
	<title>
		Login page
	</title>
	<style type="text/css">
		body{
			background-color: yellow;
			font-weight: bold;
		}
		h1,h2{
			color: green;
		}
	</style>
</head>
<body>
<h1>Welcome to the Login Page</h1>
<h2>Please enter your username and password to login</h2>
<fieldset style="width:75%">
<legend>Login Form</legend>
<table border="0">
	<tr>
	<form method="POST" action="login.php">
		<td>USERNAME</td><td><input type="text" name="username"/></td>
		</tr>
		<tr>
        <td>PASSWORD</td><td><input type="password" name="password"/></td>
        </tr>
        <tr>
        	<td><input type="submit" name="submit" value="Submit" /></td>
        </tr>
	</form>
</table>
</fieldset>
</body>
</html>