<!DOCTYPE html>
<html>
<head>
	<title>Code</title>
	<style type="text/css">
		body{
			background-color: pink;
		}
	</style>
</head>
<body>
<h3>
Your requested code is...
<br />
</h3>
</body>
</html>
<?php
$i=0;
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","")or die("Failed to connect to database:"+mysqli_error());
$db=mysqli_select_db($con,"mysql")or die("Failed to connect to database:"+mysqli_error());
$query1=mysqli_query($con,"SELECT Code FROM Code WHERE uniqueId='$id'")or die(mysqli_error());
function mysqli_result($result, $row, $field=0)
{
	$result->data_seek($row);
	$data=$result->fetch_array();
	return $data[$field];
}
$result=mysqli_result($query1,0,"Code") or die(mysqli_error($con));

echo $result;
?>