<?php
session_start();
$login_session=$_SESSION['req_user'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Your Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="profile">
			<b id="welcome"> <i> <?php echo $login_session; ?></i> your request has been placed : </b>
			<b id="Go Back"><a href="logout.php">Go Back</a></b>
		</div>
	</body>
</html>
