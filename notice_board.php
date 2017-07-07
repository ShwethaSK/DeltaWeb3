<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{
		background-color: lightgreen;
	    }
	h1,h2{
		color: brown;
	  }
	  </style>
	  <script type="text/javascript">
   var z=getParameterByName('id');
   if(z!=null)
   window.location.assign("code1.php?id="+z);
   function getParameterByName(name,url)
        {
        	if(!url)url=window.location.href;
        	name=name.replace(/[\[\]]/g,"\\$&");
        	var regex=new RegExp("[?&]"+name+"(=([^&#]*)|&|#|$)"),results=regex.exec(url);
        	if(!results) return null;
        	if(!results[2]) return '';
        	return decodeURIComponent(results[2].replace(/\+/g," "));
        }
	  </script>
	<title>Snippet sharing forum</title>
</head>
<body>
<h1>Welcome to the code snippet sharing page...</h1>
<h2>Paste your code snippet</h2>
<fieldset style="width:75%">
	<table border="0">
	<tr>
		<form method="POST" action="save_dtbs.php">
		<td>CODE</td><td><input type="text" name="code"></td>
    </tr>
		<tr>
		<td>ID</td><td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>	
		</form>
	</table>
</fieldset>
<input type="button" name="view_dtbs" value="View your codes" onclick="location.href='view_dtbs.php';">
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
mysqli_query($con,"CREATE TABLE Code
	(
	uniqueId VARCHAR(5) NOT NULL ,
	userName VARCHAR(50) NOT NULL,
	Code VARCHAR(50000) NOT NULL,
	PRIMARY KEY(uniqueId))
	");
?>
