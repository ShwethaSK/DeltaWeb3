<!DOCTYPE html>
<html>
<head>
	<title>
		Your codes
	</title>
	<style type="text/css">
		body{
			background-color: lightgreen;
		}
	</style>
</head>
<body>
<h3>
Your code snippets are...
</h3>
</body>
</html>
<?php
$i=0;
include("session.php");
$name=$login_session;
$i=0;
$con=mysqli_connect("localhost","root","")or die("Failed to connect to database:"+mysqli_error());
$db=mysqli_select_db($con,"mysql")or die("Failed to connect to database:"+mysqli_error());
$query1=mysqli_query($con,"SELECT Code FROM Code WHERE userName='$name'")or die(mysqli_error());
$row=mysqli_num_rows($query1);
function mysqli_result($result, $row, $field=0)
{
	$result->data_seek($row);
	$data=$result->fetch_array();
	return $data[$field];
}
while($i<$row)
{
	$result=mysqli_result($query1, $i, "Code");
	echo $i+1;
	echo ". ";
	echo "$result</td><br />"; 
	$i++;
}
?>