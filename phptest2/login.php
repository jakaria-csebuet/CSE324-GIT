<?php
	$hn = 'localhost';
  	$db = 'Badhan';
  	$un = 'root';
  	$pw = '1234';
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['Signup'])) {
		header("location: signup.php"); // Redirecting To Other Page
	}
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		}
		else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			$conn = new mysqli($hn, $un, $pw, $db);
			if ($conn->connect_error) {
				die($conn->connect_error);
				$error = "Could not connect to database";
			}
    			else{
				$query  = "SELECT * FROM Donor where Id='$username' AND Password='$password'";
				$result = $conn->query($query);
				if (!$result) die($conn->error);
				$rows = $result->num_rows;
				if ($rows == 1) {
					$_SESSION['login_user']=$username; // Initializing Session
					header("location: profile.php"); // Redirecting To Other Page
				} else {
					$error = "Username or Password is invalid";
				}
			}
			$result->close();
  			$conn->close();
		}
	}
?>
