<?php
include('session.php');
?>
<!DOCTYPE html>
<head>
<title>Your Home Page</title>
<style type="text/css">
	body{
		background-color: lavender;
		font-weight: bold;
		color:darkviolet;
	}
</style>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br /><br/>
<a href="notice_board.php">Click here to go to the Notice Board</a><br /><br />
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
