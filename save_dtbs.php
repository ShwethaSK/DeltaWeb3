<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	</script>
</head>
<body>
<?php
include("session.php");
if(isset($_POST['submit'])){
	$code=$_POST['code'];
	$uniqueId=$_POST['id'];
	$name=$login_session;
    $con=mysqli_connect("localhost","root","")or die("Failed to connect to database:"+mysqli_error());
$db=mysqli_select_db($con,"mysql")or die("Failed to connect to database:"+mysqli_error());
    $query=mysqli_query($con,"INSERT INTO Code(uniqueId,userName,Code) VALUES('$uniqueId','$name','$code')") or die(mysqli_error($con));
    header("Location:notice_board.php");
	    }
?>
</body>
</html>