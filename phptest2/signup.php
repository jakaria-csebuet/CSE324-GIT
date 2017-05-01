<?php
	include('signupcheck.php'); // Includes Login Script
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Sign Up</title>
			<link href="style.css" rel="stylesheet" type="text/css">
		</head>
	<body>
		<div id="main">
			<h1>Sign Up</h1>
			<div id="signup">
				<h2>Sign Up Information</h2>
				<form action="" method="post">
					<label>Name :</label>
					<input id="name" name="name" placeholder="" type="text">
					<label>Student ID :</label>
					<input id="id" name="id" placeholder="" type="text">
					<label>Hall :</label>
					<input id="hall" name="hall" placeholder="" type="text">
					<label>Blood Group :</label>
					<input id="blood" name="blood" placeholder="" type="text">
					<label>Date of birth :</label>
					<input id="date" name="date" placeholder="" type="text">
					<label>Area (If resides anywhere in Dhaka) :</label>
					<input id="area" name="area" placeholder="" type="text">
					<label>Email :</label>
					<input id="email" name="email" placeholder="" type="text">
					<label>Phone Number :</label>
					<input id="phone" name="phone" placeholder="01..." type="text">
					<label>Password :</label>
					<input id="password" name="password" placeholder="*********" type="password">
					<input name="Signup" type="submit" value=" Signup ">
					<span><?php echo $error; ?></span>
				</form>
			</div>
		</div>
	</body>
</html>
