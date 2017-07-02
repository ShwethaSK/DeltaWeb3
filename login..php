<? php
session_start();
$error='';
if(isset($_POST['submit']))
{
	if(empty($_POST['username']))||(empty($_POST['password']))
		$error="Username or password is invalid";
}
else
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$username=stripslashes($username);
	$password=stripslashes($password);
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("test",$con);
	$query=mysql_query("SELECT * FROM Users WHERE password=SHA('$password') AND username='$username'") or die(mysql_error());
	$rows=mysql_fetch_row($query);
	if($rows==1)
	{
		$_SESSION['login_user']=$username;
		header("Location:profile.php");
	}
	else
		$error="USername or password is invalid");
}
mysql_close($con);
}
}
?>
}